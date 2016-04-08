<?php
/**
 * Created by PhpStorm.
 * User: Коля
 * Date: 08.02.2016
 * Time: 22:29
 */
$f_array = file($argv[1]);
$sum = array_sum($f_array);
echo $sum;