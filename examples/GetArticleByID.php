<?php

include("../vendor/autoload.php");

use BorgerDk\ArticleService\Client as BorgerDkClient;
use BorgerDk\ArticleService\Resources\Endpoints;

$client = new BorgerDkClient();
$params = array('articleID' => 150, 'municipalityCode' => 157);
$article = new Endpoints\GetArticleByID($client, $params);

echo "<pre>";
print_r($article->getResultFormatted());
