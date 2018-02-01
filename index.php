<?php
require 'bootstrap.php';

use Xupopter\System\App;

foreach (App::config('providers') as $pName => $paths) {
    App::runProvider($pName, $paths, function ($house) {
        // callback fired for each crawled house
        echo $house->title . " - " . $house->price . "€";
        // $mysql->query("INSERT INTO houses...
    });
}