<?php
/**
 * Created by PhpStorm.
 * User: Коля
 * Date: 16.02.2016
 * Time: 15:49
 */
$file = fopen($argv[1], "r");
while (! feof($file)) {
    $str = fgets($file);

    $allRes = explode('|',trim ($str));







    $res1 = trim($res1);
    $res2 = trim($res2);
    $res3 = trim($res3);
    $res1 = array_map("intval", explode(" ", $res1));
    $res2= array_map("intval", explode(" ",$res2));
    $res3= array_map("intval", explode(" ", $res3));

    $allresult = array();
    $count = count($res1);

    for($r1 = 0, $r2 = 0, $r3 = 0; $r1 < $count; $r1++,$r2++,$r3++ ) {
        if($res1[$r1] > $res2[$r2] && $res1[$r1] > $res3[$r3] ) {
            $allresult[] = $res1[$r1];
                 }
        elseif($res1[$r2] > $res1[$r1] && $res2[$r2] > $res3[$r3] ) {
            $allresult[] = $res2[$r2];
        }
        elseif($res3[$r3] > $res2[$r2] && $res3[$r3] > $res1[$r1] ) {
            $allresult[] = $res1[$r3];
        }
    }
    $allresult = implode(" ", $allresult);
    echo $allresult."\n";
}
