<?php
/**
 * Created by PhpStorm.
 * User: Коля
 * Date: 10.02.2016
 * Time: 21:44
 */
//$file = fopen("E:\MY_study\PHP\TXT\z91Sort.txt" , "r");
$file = fopen($argv[1], "r");
while (! feof($file)) {
    $str = fgets($file);
    //echo"$str\n";
    // $str = trim($str, "\t\n\r");
    $arr = explode(' ',trim($str, "\n\t\r"));
    //var_dump($arr);
   // for ($i = 0; $i < count($arr); $i++){
    //    $arr[$i] = intval($arr[$i]);
    //}
    //var_dump($arr);
    sort($arr, SORT_NUMERIC);//bool ksort ( array &$array [, int $sort_flags = SORT_REGULAR ] )
    //var_dump($arr);
    $str = implode(' ', $arr);
    echo "$str\n";
    //function asort(&$arr){
    //foreach ($arr as $key => $val) {
      //  $i = $key  = $val;
    //}
    //}
    //asort($arr);
//var_dump($arr);
   // $i = implode(", ", $arr);
   // echo $i."\n";
}

///sort($fruits, SORT_NATURAL | SORT_FLAG_CASE);
//foreach ($fruits as $key => $val) {
  //  echo "fruits[" . $key . "] = " . $val . "\n";
//}