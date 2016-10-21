<?php

namespace BorgerDk\ArticleService;

use SoapClient;
use BorgerDk\ArticleService\Traits;

/**
 * Class Client
 *
 * @package BorgerDk\ArticleService
 */
class Client implements ClientInterface
{
    use Traits\ClientTrait;

    protected $municipalityCode;

    /**
     *
     */
    public function __construct($municipalityCode = 0)
    {
        $this->setMunicipalityCode($municipalityCode);
        $this->client = new SoapClient($this->soapUrl, $this->debug);
    }
}
