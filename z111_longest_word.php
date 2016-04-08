<?php
/**
 * Created by PhpStorm.
 * User: Коля
 * Date: 17.02.2016
 * Time: 20:40
 */
$file = fopen($argv[1], "r");
while (! feof($file)) {
    $str = fgets($file);

    $words = explode(" ", $str);
    $digitW = array();
    $n = array();
    foreach ($words as $word) {
        $length = strlen($word);
        $word = $length . $word;
        $digitW[] = $word;
        $n[] = $length;
    }
    $max = max($n);
    $res = strpos($digitW ,$max);
    echo $res."WWWWWW\n";
//var_dump( $words);
//var_dump($digitW);
    //rsort($digitW, SORT_NUMERIC);

//echo $digitW[0];
    $all = implode(" ", $digitW);
    //ищем в нем макс
    //$longth_word = array_pop($digitW);
    //$longth_word = preg_replace('/\d/', '', $longth_word);
    // echo $longth_word;

    $chars = preg_split('//', $all, -1, PREG_SPLIT_NO_EMPTY);
    $count = count($chars);
    $spase = " ";
    $star = "";
    $q = "*";
    $all = array();
    $i = 1;
    $z = 1;
    /**foreach($chars as $char) {
     * //for ($i = 0; $i < $count; $i++) {
     * //$star = " ";
     * $st1 = $st1 * $i;
     * //$star = $star . $st1;
     * $char = $st1.$char;
     * $all[] = $char;
     * $i = $i.$z;
     * //$count++;
     * //}
     * }
     * $allW = implode("", $all);
     * echo $allW;*/
    $end = array();
    for ($i = 0; $i < $count; $i++, $star = $star . $q) {
        //$star = $star*$i;

        $ch = $spase . $star . $chars[$i];
        $end[] = $ch;

    }
    //var_dump($end);
    $end_all = implode("", $end);
    $end_all = trim($end_all);

    echo $end_all."\n";
}