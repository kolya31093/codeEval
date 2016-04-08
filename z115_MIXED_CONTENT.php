<?php
/**
 * Created by PhpStorm.
 * User: Коля
 * Date: 17.02.2016
 * Time: 13:06
 */
$strings = file($argv[1]);
foreach ($strings as $str) {
$str = trim($str);
//$str = "erte,werwe,er";
//$str = "17,2124,13,14,43,41,";
//$str = "werwett,ertg,rwr,1,3213,123";
//$regexp = "/^[a-zA-z]{1,}$/";
//$regexpNum = "/^[0-9]{1,}$/";
$out_spase = str_replace(",","",$str);
    $out_spase = trim($out_spase);
    //$numer = intval($out_spase);
    //echo $out_spase ;
    if (preg_match('@^[a-zA-Z]*$@u',$out_spase)) {  //ищет буквы
        echo $str."\n";
    }
elseif(preg_match('@^[0-9]*$@u',$out_spase)) { //ищет ЦЫфры
    echo $str."\n";
}
else {


    $digit = preg_replace('~[^0-9,]+~', '', $str);//удаляет всё кроме цыфр
    $digit = preg_replace("/,+/", " ", $digit);
    $digit = trim($digit);
   $digit = str_replace(" ",",",$digit);
    $leter = preg_replace('~[^a-zA-z,]+~', '', $str);//удаляет всё кроме цыфр
    $leter = preg_replace("/,+/", " ", $leter);
    $leter = trim($leter);
    $leter = str_replace(" ",",",$leter);
echo $leter."|".$digit."\n";
}
}

