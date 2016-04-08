<?php

$strings = file($argv[1]);
foreach ($strings as $str) {
    $kol = preg_split('/|,|;/u', trim($str), -1, PREG_SPLIT_NO_EMPTY);//разбивает строку по регулярному выражению
    //разделяем строку вмасив цыфр
    $kol = array_count_values($kol);//возвращает массив, ключами которого являются значения массива array, а значениями - частота повторения значений array.
//если 2 в кол
    if (array_search(2, $kol)) {
        $result = '';
        $kn = array_keys($kol, 2);
        foreach ($kn as $value){
            $result .= $value;
            $result .= ',';

        }
        echo mb_substr($result, 0, mb_strlen($result)-1 );

    }
    echo"\n";
}