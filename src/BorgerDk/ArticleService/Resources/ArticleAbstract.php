<?php

namespace BorgerDk\ArticleService\Resources;

use BorgerDk\ArticleService;
use BorgerDk\ArticleService\Client as Client;

/**
 * Abstract class for all article service endpoints
 */
abstract class ArticleAbstract extends ResourceAbstract
{
    /**
     * Return the raw result from the service endpoint.
     *
     * @return object
     */
    public function getResultFormatted()
    {
        return $this->resourceResult;
    }
}