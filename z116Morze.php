<?php
/**
 * Created by PhpStorm.
 * User: Коля
 * Date: 11.02.2016
 * Time: 13:39
 */
 /* Коды для замены букв */
$strings = file("D:\MY_study\PHP\TXT\z113_multiplicaationNumb.txt");
 //$strings = file($argv[1]);
//var_dump($strings);
foreach ($strings as $text) {
$code = array(
    'A'	=>	'.-',
    'B'	=>	'-...',
    'W'	=>	'.--',
    'G'	=>	'--.',
    'D' => '-..' ,
    'E'	=>	'.',
    'V' => '...-',
    'Z'	=>	'--..',
    'I'	=>	'..',
    'J'	=>	'.---',
    'K' => '-.-',
    'L'	=>	'.-..',
    'M'	=>	'--',
    'N' => '-.',
    'O' => '---',
    'P' => '.--.',
    'R' => '.-.',
    'S'	=>	'...',
    'T'	=>	'-',
    'U' => '..-',
    'F'	=>	'..-.',
    'H' => '....',
    'C' => '-.-.',
    'Q' => '--.-',
    'Y' => '-.--',
    'X' => '-..-',
    '1' => '.----',
    '2' => '..---' ,
    '3' => '...--',
    '4' => '....-',
    '5' => '.....',
    '6' => '-....',
    '7' => '--...' ,
    '8' => '---..',
    '9' => '----.',
    '0' => '-----'
);
$text = trim($text, "\n\t\r");
    $code = array_flip($code);
    $words = strtr($text,$code);
    //$words = preg_replace ("/[\s]{1,1} /","",$words);
    $words = preg_replace ("/  +/","_",$words);
    $words = str_replace(" ","",$words);
    $words = preg_replace ("/[_]/","  ",$words);
    //$words = explode(" ", $words);
//$wor = implode("", $words);
//print_r ($words);

    echo $words."\n";
}




