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

for ($num = 2, $count = 0, $result = 0 ; $count < 1000;$num++  ) {
    if (numb($num)) {
        ++$count;
        $result = $result +$num;
    }
}
echo $result;
