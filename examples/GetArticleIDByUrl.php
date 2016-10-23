<?php

include("../vendor/autoload.php");

use BorgerDk\ArticleService\Client as BorgerDkClient;
use BorgerDk\ArticleService\Resources\Endpoints;

$client = new BorgerDkClient();
$params = array('url' => 'https://www.borger.dk/Sider/Adressebeskyttelse.aspx');
$article = new Endpoints\GetArticleIDByUrl($client, $params);

echo "<pre>";
print_r($article->getResultFormatted());
