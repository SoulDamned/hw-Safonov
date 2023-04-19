<?php

$title = 'Здравствуйте! Проживаю в городе Магнитогорск. Работаю электриком на коксохимическом произдвестве ММК. Так же являюсь студентом 4 курса МГТУ им. Носова.';
$title = explode(" ", $title, 2);
$red =Array('green', 'red', 'lightblue','yellow','brown','orange','pink');
$rand = array_rand($red);
echo '<span style="color:'.$red[$rand].'">'  . $title[0] . '</span> ' . $title[1];