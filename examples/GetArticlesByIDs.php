<?php

include("../vendor/autoload.php");

use BorgerDk\ArticleService\Client as BorgerDkClient;
use BorgerDk\ArticleService\Resources\Endpoints;

$client = new BorgerDkClient();
$params = array('articleIDs' => array(150, 152, 154, 155), 'municipalityCode' => 157);
$articles = new Endpoints\GetArticlesByIDs($client, $params);

echo "<pre>";
print_r($articles->getResultFormatted());
