<?php
/**
 * Created by PhpStorm.
 * User: Коля
 * Date: 15.02.2016
 * Time: 17:32
 */
$strings = file("D:\MY_study\PHP\TXT\z156_ROLLER COASTER.txt");
//$strings = file($argv[1]);
foreach ($strings as $str) {

    list($text, $word) = explode('|', trim($str));


    $regexp = "/".$word."/";
   // echo $regexp."\n";
    //echo $text;
    if (preg_match($regexp, $text)) {
//        $domain = strstr($text, $word);

        $wArr = explode(" ", $text);
        foreach ($wArr as $oneW) {
            if (preg_match($regexp, $oneW)) {
                print($oneW) ;
            }
        }
    }

    else {
        echo "False";

    }



    //var_dump($wArr);
    echo "\n";
}

/**   $allWords = array();

$count = preg_match_all($regexp, $text, $allWords);
print_r($allWords);
$wor = implode(" ", $allWords);
echo $wor."\n";*/
