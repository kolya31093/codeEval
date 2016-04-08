<?php
/**
 * Created by PhpStorm.
 * User: NIck
 * Date: 06.02.2016
 * Time: 11:40
 */

$file = fopen("E:\MY_study\PHP\z18.txt", "r");
//$file = fopen($argv[1], "r");
while (!feof($file)) {
      $str = fgets($file);
      //echo $str;
    if (mb_strlen($str) > 0) {
        $arr = explode( ",", $str);
       // var_dump($arr);
    }
    $arr[0] = intval($arr[0]);
    $arr[1] = intval($arr[1]);
    $great = 0;
    $mn = 2;
  //  for ($great = 0; $great < $arr[0]; $great = $arr[1] * $mn  ) {
        while ($great < $arr[0]) {
        $great = $arr[1] * $mn;
        $mn++;

    }
    echo "$great \n";

}fclose($file);



