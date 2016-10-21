<?php

namespace BorgerDk\ArticleService\Resources;

use BorgerDk\ArticleService;
use BorgerDk\ArticleService\Resources\ResourceAbstract;
use BorgerDk\ArticleService\ClientInterface as Client;

/**
 * Class GetAllArticles
 *
 * @package BorgerDk\ArticleService
 */
class GetAllArticles extends ResourceAbstract
{
    /**
     * Return a simple formatted version of the result from the service endpoint.
     *
     * @return array
     */
    public function getResultFormatted() {
        $result = $this->resourceResult->ArticleDescription;
        $items = array();

        foreach ($result as $article) {
            $article_item = $this->formatSingleArticle($article);
            $items[$article_item->ArticleId] = $article_item;
        }

        return $items;
    }

    /**
     * Format a single article from the result.
     *
     * @param object $article
     *
     * @return object
     */
    protected function formatSingleArticle($article) {
        $item = new \stdClass();
        $item->ArticleId = $article->ArticleID;
        $item->ArticleTitle = html_entity_decode($article->ArticleTitle, ENT_NOQUOTES, 'UTF-8');
        $item->ArticleUrl = $article->ArticleUrl;
        $item->LastUpdated = $article->LastUpdated;
        $item->PublishingDate = $article->PublishingDate;
        return $item;
    }
}