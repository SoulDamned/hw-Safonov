<?php
$arr = [50, 45, 40, 35, 30];

$result = 0;
foreach ($arr as $elem) {
    $result = $result + $elem;
}
echo $result . '<br>';


$arr2 = [];
for($i = 0; $i < 7; $i++){
    $arr2[$i] = mt_rand(0,9);
    echo $arr2[$i] . ' ';
}
echo "reverse" . '<br>';
for($i = count($arr2); $i >= 0; $i--){
    echo $arr2[$i] . ' ';
}
echo '<br>';


$arr3 =array('1.png', '2.png', '3.png', '4.png', '5.png');{
    echo $arr3[array_rand($arr3)];
}
echo '<br>';