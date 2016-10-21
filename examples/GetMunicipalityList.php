<?php
include("../vendor/autoload.php");

use BorgerDk\ArticleService\Client as BorgerDkClient;
use BorgerDk\ArticleService\Resources;

$client = new BorgerDkClient();
$municipalities = new Resources\GetMunicipalityList($client);

echo "<pre>";
print_r($municipalities->getResultFormatted());