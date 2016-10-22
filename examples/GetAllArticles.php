<?php

include("../vendor/autoload.php");

use BorgerDk\ArticleService\Client as BorgerDkClient;
use BorgerDk\ArticleService\Resources\Endpoints;

$client = new BorgerDkClient();
$articles = new Endpoints\GetAllArticles($client);

echo "<pre>";
print_r($articles->getResultFormatted());