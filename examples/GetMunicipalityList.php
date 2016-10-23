<?php

include("../vendor/autoload.php");

use BorgerDk\ArticleService\Client as BorgerDkClient;
use BorgerDk\ArticleService\Resources\Endpoints;

$client = new BorgerDkClient();
$municipalities = new Endpoints\GetMunicipalityList($client);

echo "<pre>";
print_r($municipalities->getResultFormatted());
