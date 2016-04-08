<?php
    /**
     * Created by PhpStorm.
     * User: Коля
     * Date: 17.02.2016
     * Time: 10:54
     */
$schet = 1;
    $file = fopen($argv[1], "r");
    while (! feof($file)) {
        $str = fgets($file);
        $str = trim($str);

//    $str = "1 1 3 3 3 2 2 2 2 14 14 14 11 11 11 2";

        $allnumber = explode(" ", $str);//разбивает строку по регулярному выражению
        $count_values = array_count_values($allnumber);
        //var_dump($count_values);
        $kol = array_values($count_values);
       // var_dump($kol);
        $numb =array_keys($count_values);
        //var_dump($numb);
        $count = count($count_values);

        $result = array();

        //foreach($kol as $ko) {
        for($i = 0; $i < $count; $i++){
            $result[] = $kol[$i];
            $result[] = $numb[$i];

            //}

        }
        //$x = array_pop($result);
        $res = implode(" ", $result);
        $res = trim($res);
         echo $res."\n";
        $schet++;
        if($schet > 50){
            break;

        }
}