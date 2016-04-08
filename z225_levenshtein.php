<?php
/**
 * Created by PhpStorm.
 * User: Коля
 * Date: 16.02.2016
 * Time: 13:51
 */
$file = fopen($argv[1], "r");
while (! feof($file)) {
    $str = fgets($file);

    list($test_text, $original) = explode('|', trim($str));
    $test_text = trim($test_text);
    $original = trim($original);
    $difference = levenshtein($original, $test_text);

    if($difference == 0) {
        echo 'Done';
    }
    elseif ($difference <= 2 ) {
        echo 'Low';
    } elseif ($difference <= 4) {
        echo 'Medium';
    } elseif ($difference <= 6) {
        echo 'High';
    } elseif ($difference > 6) {
        echo 'Critical';
    }
    echo"\n";
}

