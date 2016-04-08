<?php
/**
 * Created by PhpStorm.
 * User: Коля
 * Date: 14.02.2016
 * Time: 22:07
 */
$strings = file($argv[1]);
foreach ($strings as $numb) {
    if($numb < 0 || $numb > 100) {
        echo "This program is for humans";
//        break;
    }   elseif($numb >= 0 and $numb <= 2){
        echo"Still in Mama's arms";

    }
    elseif($numb >= 0 and $numb <= 2) {
        echo "Still in Mama's arms";
    }
    elseif($numb >= 3 and $numb <= 4){
            echo"Preschool Maniac";
        }
    elseif($numb >= 5 and $numb <= 11){
            echo"Elementary school";
        }
    elseif($numb >= 12 and $numb <= 14){
            echo"Middle school";
        }
    elseif($numb >= 15 and $numb <= 18){
            echo"High school";
        }
    elseif($numb >= 19 and $numb <= 22){
            echo"College";
        }
    elseif($numb >= 23 and $numb <= 65){
            echo"Working for the man";
        }
     elseif($numb >= 65 and $numb <= 100){
            echo"The Golden Years";
        }
echo"\n";
}

