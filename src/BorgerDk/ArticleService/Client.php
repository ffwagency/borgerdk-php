<?php

namespace BorgerDk\ArticleService;

use SoapClient;
use BorgerDk\ArticleService\Traits;

/**
 * Class Client
 *
 * @package BorgerDk\ArticleService
 */
class Client
{
    /**
     * SOAP Connection
     *
     * @var \SoapClient
     */
    protected $client;

    /**
     * BorgerDk Article Export URL.
     *
     * @var string
     */
    protected $soapUrl = 'https://www.borger.dk/_vti_bin/borger/ArticleExport.svc?wsdl';

    /**
     * Array with debug options
     *
     * @var array
     */
    protected $debug = ["trace" => 1, "exceptions" => 1];

    /**
     *
     */
    public function __construct()
    {
        $this->client = new SoapClient($this->soapUrl, $this->debug);
    }

    /**
     * Return client
     *
     * @return \SoapClient
     */
    public function getClient()
    {
        return $this->client;
    }
}
