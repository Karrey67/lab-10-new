<?php
$array = array();
for ($i=0; $i<20; $i++){
    $array[] = rand(-100,100);
}
alert('Массив имеет следующий вид: '+$array);
 $min = abs($array[0]);
for ($i=0;$i<count($array);$i++){
    if ($array[$i] < $min){
        $min = $array[$i];
    }
}
echo "Минимальный по модулю элемент:".$max."<br>";
$arraynew = [];
$arrayneww = [];
for ($i=0;$i<count($array);$i++){
    if ($array[$i] != 0){
    array_push($arraynew,$array[$i]);
    }
}
for ($i=0;$i<count($array);$i++){
    if ($array[$i] == 0){
    array_push($arrayneww,$array[$i]);
    }
}
array_push($arraynew,$arrayneww);
echo "Все элементы равные нулю перенесены в конец массива:".$arraynew."<br>";
$first = null;
$second = null;
$result = 0;
for ($i=0;$i<count($array);$i++){
    if($array[ $i ] > 0 && $first == null){
    $first = $i;
    }
    else if ($array[ $i ] > 0 && $second == null){
    $second = $i;
    }
}
for($i = $first; $i < $second; $i++){
        $result+=$array[ $i ];
}
echo "Сумма элемнтов массива, расположенных между первым и вторым положительными элементами:".$result."<br>";
?>