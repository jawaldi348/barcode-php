<?php
require 'vendor/autoload.php';

// This will output the barcode as HTML output to display in the browser
// $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
// echo $generator->getBarcode('081231723897', $generator::TYPE_CODE_128);

$time = time();
$generator = new Picqer\Barcode\BarcodeGeneratorJPG();
file_put_contents('images/' . $time . '.jpg', $generator->getBarcode($time, $generator::TYPE_CODE_128));
