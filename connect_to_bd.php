<?php
// phpinfo();
require_once __DIR__ ."/vendor/autoload.php";

$client = new MongoDB\Client;

$collection = $client->comps_org->compsss;
