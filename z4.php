
/**
 * Created by PhpStorm.
 * User: Коля
 * Date: 10.02.2016
 * Time: 9:09

$sum = 2;
for($count = 3; $count <= 1000; $count++) {
    if (($count < 9) and ($count % 2 != 0)) {
        $sum = $sum + $count;
    }
    if ($count > 9) {
        if ($count % 2 != 0) {
            if ($count % 3 != 0) {
                if ($count % 5 != 0) {
                    if ($count % 7 != 0) {
                        $sum = $sum + $count;
                    }
                }
            }
        }
    }
}
echo $sum;*/

<?php



function numb($num)
{
    for($i =2; $i <= $num/2;$i++ ) {
        if($num % $i == 0) {
            return false;

        }

    }
    return true;

}

for ($num = 2, $count = 0, $result = 0 ; $count <= 1000;$num++  ) {
    if (numb($num)) {
        ++$count;
        $result = $result +$num;
    }
}
echo $result;
