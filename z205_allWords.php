<?php
/**
 * Created by PhpStorm.
 * User: Коля
 * Date: 11.02.2016
 * Time: 9:17
 */
$strings = file($argv[1]);
foreach ($strings as $str) {

    $st = preg_replace ("/[^a-zA-Z\s]/", " ",$str);  //\s -- пробел

    $st = preg_replace ("/  +/"," ",$st);
    //$st = preg_replace ("/-/"," ",$st);
    $st = trim($st, "\n\t\r");
    $st = trim($st, ' ');
    $st = mb_strtolower($st);
    echo $st."\n";
}
