<?php

/*
 * This file is part of the borgerdk-php SDK.
 *
 * (c) Jens Beltofte <jens.beltofte@ffwagency.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BorgerDk\ArticleService\Resources\Endpoints;

use BorgerDk\ArticleService;
use BorgerDk\ArticleService\Resources\ResourceAbstract;

/**
 * Class GetAllSites
 *
 * @package BorgerDk\ArticleService
 */
class GetAllSites extends ResourceAbstract
{
    /**
     * Return a simple formatted version of the result from the service endpoint.
     *
     * @return array
     */
    public function getResultFormatted()
    {
        $result = $this->resourceResult->Site;
        $items = array();

        foreach ($result as $site) {
            $siteItem = $this->formatSingleSite($site);
            $items[$siteItem->site_id] = $siteItem;
        }

        return $items;
    }

    /**
     * Format a single site from the result.
     *
     * @param object $site
     *
     * @return object
     */
    protected function formatSingleSite($site)
    {
        $item = new \stdClass();
        $item->parent_id = $site->ParentID;
        $item->site_id = $site->SiteID;
        $item->site_name = urldecode($site->SiteName);
        $item->site_title = html_entity_decode($site->SiteTitle, ENT_NOQUOTES, 'UTF-8');
        return $item;
    }
}
