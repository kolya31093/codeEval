<?php
/**
 * Created by PhpStorm.
 * User: Коля
 * Date: 11.02.2016
 * Time: 7:15
 */
//$file = fopen("E:\MY_study\PHP\TXT\z91Sort.txt" , "r");
$file = fopen($argv[1], "r");
while (! feof($file)) {
    $text = fgets($file);
    $code = array(
        'A'	=>	'.-',
        'B'	=>	'-...',
        'W'	=>	'.--',
        'G'	=>	'--.',
        'D' => '-..' ,
        'E'	=>	'@',
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
        'T'	=>	'#',
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
    $words = strtr($text,$code);
    $words = mb_strtoupper($words);
    //$words = preg_replace ("/[\s]{1,1} /","",$words);
    //$words = preg_replace ("/  +/","_",$words);
    //$words = str_replace(" ","",$words);
    //$words = preg_replace ("/[_]/","  ",$words);
    //$words = explode(" ", $words);
//$wor = implode("", $words);
//print_r ($words);
    $code2 = array(
        'a'	=>	'.-',
        'b'	=>	'-...',
        'w'	=>	'.--',
        'g'	=>	'--.',
        'd' => '-..' ,
        'e'	=>	'@',
        'v' => '...-',
        'z'	=>	'--..',
        'i'	=>	'..',
        'j'	=>	'.---',
        'k' => '-.-',
        'l'	=>	'.-..',
        'm'	=>	'--',
        'n' => '-.',
        'o' => '---',
        'p' => '.--.',
        'r' => '.-.',
        's'	=>	'...',
        't'	=>	'#',
        'u' => '..-',
        'f'	=>	'..-.',
        'h' => '....',
        'c' => '-.-.',
        'q' => '--.-',
        'y' => '-.--',
        'x' => '-..-',
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

    $code2 = array_flip($code2);
    $text = strtr($words,$code2);
    echo $text."\n";



}
