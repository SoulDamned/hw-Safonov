<?php
echo '<b>' . "1)" . '</b>' . '</br>';
for ($i = 5; $i <= 13; $i++) {
    echo $i . '</br>';
}
echo '<b>' . "2.1)" . '</b>';
$n = 1000;
$num = 0;
while ($n >= 50) {
    $n = $n / 2;
    $num++;
}
echo 'Количество итераций: ' . $num . "<br/>" . '<b>' . "2.2)" . '</b>';
$a = 1000;
$num = 0;
$c = 50;
for ($n = 1000; $a >= $c; $num++) {
    $a = $a / 2;
}
echo 'Количество итераций: ' . $num . "<br/>";
echo 'Число < ' . $c . ' = ' . $a;
