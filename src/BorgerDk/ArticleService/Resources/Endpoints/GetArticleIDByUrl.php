<?php

namespace BorgerDk\ArticleService\Resources\Endpoints;

use BorgerDk\ArticleService;
use BorgerDk\ArticleService\Resources\ResourceAbstract;

/**
 * Class GetArticleIDByUrl
 *
 * @package BorgerDk\ArticleService
 */
class GetArticleIDByUrl extends ResourceAbstract
{
    /**
     * Return a simple formatted version of the result from the service endpoint.
     *
     * @return array
     */
    public function getResultFormatted()
    {
        $article = $this->resourceResult;

        $item = new \stdClass();
        $item->id = $article->ArticleID;
        $item->title = html_entity_decode($article->ArticleTitle, ENT_NOQUOTES, 'UTF-8');
        return $item;
    }
}
