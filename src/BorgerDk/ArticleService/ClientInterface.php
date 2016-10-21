<?php

namespace BorgerDk\ArticleService;

/**
 * interface ClientInterface
 *
 * @package BorgerDk\ArticleService
 */
interface ClientInterface
{
  public function getClient();

  public function getMunicipalityCode();

  public function setMunicipalityCode(int $municipalityCode);
}
