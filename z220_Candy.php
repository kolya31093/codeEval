<?php
/**
 * Created by PhpStorm.
 * User: Коля
 * Date: 16.02.2016
 * Time: 12:59
 */
$file = fopen($argv[1], "r");
while (! feof($file)) {
    $str = fgets($file);
    //$str = "Vampires: 48, Zombies: 85, Witches: 34, Houses: 52";
    $str = preg_replace('/[^0-9,]/', '', $str);
    // echo $str;
    list($vam, $zomb, $witch, $hous) = explode(",", $str);
    $vam = intval($vam);
    $zomb = intval($zomb);
    $witch = intval($witch);
    $hous = intval($hous);
    $countChildren = $vam + $zomb + $witch;
    $allCandy = ($vam * 3 + $zomb * 4 + $witch * 5)* $hous ;
    $oneChildCandy = $allCandy / $countChildren;
    //$oneChildCandy = floor($oneChildCandy);
    //echo $oneChildCandy."\n";
    echo floor($oneChildCandy)."\n";
}