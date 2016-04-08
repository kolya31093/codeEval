<?php
/**
 * Created by PhpStorm.
 * User: Коля
 * Date: 10.02.2016
 * Time: 10:47
 */
$strings = file($argv[1]);
foreach ($strings as $str) {
    $kol = preg_split(' /,;/', $str, -1, PREG_SPLIT_NO_EMPTY);//разбивает строку по регулярному выражению
    $kol = array_count_values($kol);
    $max = max($kol);
    $kol = arsort($kol);

    if ($max == 1) {
        echo "None";
    } elseif ($max > 1) {
        $kolnum = array_count_values($kol);
        $kolnum = array_keys($kolnum);
        $kolnum = arsort($kolnum);
        if ($kolnum[0] == 1) {
            print_r ($kol [0]) ;
            break;
        }
        else{

            for ($i = 0; $i <= $kolnum[0]; $i++) {
                if ($i == $kolnum) {
                    print_r ($kol[$i]);
                    break;
                }
                print_r ($kol[$i]).',' ;
            }
        }
    }
    echo"\n";
}

