<?php

/*
 * This file is part of the borgerdk-php SDK.
 *
 * (c) Jens Beltofte <jens.beltofte@ffwagency.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

include("../vendor/autoload.php");

use BorgerDk\ArticleService\Client as BorgerDkClient;
use BorgerDk\ArticleService\Resources\Endpoints\GetArticleIDsBySiteID;

$client = new BorgerDkClient();
$params = array('siteID' => 168);
$article = new GetArticleIDsBySiteID($client, $params);

echo "<pre>";
print_r($article->getResultFormatted());
