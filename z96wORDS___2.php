

<?php
//$file = fopen($argv[1], "r");
$file = fopen("test.txt" , "r");
$big = '/[A-Z]/';
$small = '/[a-z]/';
while (! feof($file)) {
    $text = fgets($file);
    $text = trim($text, "\n\t\r");
    $exp = preg_split('//', $text, -1);
    $all = '';
    foreach($exp as $str) {

        if (preg_match($big, $str)) {
            $str = mb_strtolower($str);
        }
        elseif(preg_match($small, $str)) {
            $str = mb_strtoupper($str);
        }
        $all .= $str;
    }

    echo $all."\n";
}

