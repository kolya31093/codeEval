<?php
//$file = fopen("E:\MY_study\PHP\z107.txt", "r");
$file = fopen($argv[1], "r");
while (!feof($file)) {
    $str = fgets($file);


//    $str = "stop football play";

//$str = "Существует исходная строка.Удалить самое-самое короткое слово, встретившееся здесь.";
//$str = preg_replace ("/[^a-zа-я\s]/ui"," ",$str);
//$str = trim(preg_replace('|\s+|', ' ', $str));

    $mass_str = explode(" ", $str);

    $new_mass = '';
    foreach ($mass_str as $key) {
        $new_mass[] = mb_strlen($key);
    }

    $min = min($new_mass);

    for ($i = 0; $i < count($mass_str); $i++) {
        $len = mb_strlen($mass_str[$i]);

        if ($len == $min) {
            $u_mass[$i] = $mass_str[$i];
        }
    }

    $new_arr = array_diff($mass_str, $u_mass);


//foreach($new_arr as $word) {
//    $star = " ";
//    $st1 = "*";
//    $star = $star.$st1;

    $str_out = implode(" ", $new_arr);
//    echo $str;
//    echo "\n";
//    echo $str_out."\n";


    $count = strlen($str_out);
    $letters = preg_split('//', $str_out, -1, PREG_SPLIT_NO_EMPTY);
    $l = " ";
    $star = "*";
    $all = array();
    foreach ($letters as $let) {
        //for ($i = 1; $i < $count; $i++) {


            $l = $l.$star;
            $let = $let.$l;
            $all[] = $let;

    }

    $wordStar = implode("", $all);
    echo $wordStar."\n";

}
