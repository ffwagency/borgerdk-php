<?php

namespace BorgerDk\ArticleService\Resources\Endpoints;

use BorgerDk\ArticleService;
use BorgerDk\ArticleService\Resources\ResourceAbstract;
use BorgerDk\ArticleService\ClientInterface as Client;

/**
 * Class GetMunicipalityList
 *
 * @package BorgerDk\ArticleService
 */
class GetMunicipalityList extends ResourceAbstract
{
    /**
     * Return a simple formatted version of the result from the service endpoint.
     *
     * @return array
     */
    public function getResultFormatted() {
        $result = $this->resourceResult->Municipality;
        $items = array();

        foreach ($result as $municipality) {
            $items[$municipality->MunicipalityCode] = $municipality->MunicipalityName;
        }

        return $items;
    }
}