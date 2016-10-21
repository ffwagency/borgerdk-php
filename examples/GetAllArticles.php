<?php
include("../vendor/autoload.php");

use BorgerDk\ArticleService\Client as BorgerDkClient;
use BorgerDk\ArticleService\Resources;

$client = new BorgerDkClient();
$articles = new Resources\GetAllArticles($client);

echo "<pre>";
print_r($articles->getResultFormatted());