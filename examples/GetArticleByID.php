<?php

include("../vendor/autoload.php");

use BorgerDk\ArticleService\Client as BorgerDkClient;
use BorgerDk\ArticleService\Resources\Endpoints;

$client = new BorgerDkClient();
$params = array('articleID' => 150, 'municipalityCode' => 157);
$articles = new Endpoints\GetArticleByID($client, $params);

echo "<pre>";
print_r($articles->getResultRaw());