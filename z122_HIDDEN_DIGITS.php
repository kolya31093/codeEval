<?php
/**
 * Created by PhpStorm.
 * User: Коля
 * Date: 17.02.2016
 * Time: 12:17
 */
$strings = file($argv[1]);
foreach ($strings as $str) {
//    $str = trim($str);
//$str = "Hxas#^dc15C<Fjqfm![yuFGA:Gl`hPg>*8k*f'MTOcZU;^W";
    $code = array(
        'b'	=>	'1',
        'c'	=>	'2',
        'd'	=>	'3',
        'e' => '4' ,
        'f'	=>	'5',
        'g' => '6',
        'h'	=>	'7..',
        'i'	=>	'8',
        'j'	=>	'9'

    );
    //$text = trim($text, "\n\t\r");
    //$code = array_flip($code);
    $strNumb = strtr($str,$code);
    $num = preg_replace('~[^0-9]+~','',$strNumb);//удаляет всё кроме цыфр

    $regexp = '/[0-9]/';

    if (preg_match($regexp, $num)) {
        echo $num ;
    }else {
        echo "NONE";
    }

echo "\n";
    //$words = preg_replace ("/[\s]{1,1} /","",$words);

    //$words = explode(" ", $words);
}

