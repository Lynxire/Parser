<?php

require_once "vendor/autoload.php";

use DiDom\Document;

function parser()
{
    $document = new Document('https://yandex.by/pogoda/minsk', true);

    $xexe = array(

        $document->first('.fact .fact__temp'),
        $document->first('.fact .fact__time')

    );

    foreach ($xexe as $we) {
        echo strip_tags($we);
    }

    echo "\n";
}

//////////////////////////////////////////////////

function bitcoin()
{
    $document = new Document('https://myfin.by/crypto-rates/bitcoin-usd', true);
    $xell = array(

        $document->first('.birzha_info_head_rates'),

    );

    foreach ($xell as $we) {
        echo ltrim(strip_tags($we));
    }

    echo "\n";
}

parser();
bitcoin();


?>
