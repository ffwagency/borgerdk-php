<?php

namespace BorgerDk\ArticleService\Traits;

/**
 * trait ClientTrait
 *
 * @package BorgerDk\ArticleService
 */
trait ClientTrait
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
     * Return client
     *
     * @return \SoapClient
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set municipality code
     *
     * @param int $municipalityCode
     */
    public function setMunicipalityCode(int $municipalityCode)
    {
        $this->municipalityCode = $municipalityCode;
    }

    /**
     * Return municipality code
     **
     * @return $municipalityCode
     */
    public function getMunicipalityCode(): int
    {
        return $this->municipalityCode;
    }
}