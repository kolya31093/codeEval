<?php
/**
 * Created by PhpStorm.
 * User: Коля
 * Date: 08.02.2016
 * Time: 22:15
 */
$file = fopen($argv[1], "r");
while (!feof($file)) {
    $str = fgets($file);
    if ($str%2 == 0){
        echo"1\n";
    }else {
        echo"0\n";
    }


}closefile;