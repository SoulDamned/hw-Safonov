<?php
$date = new DateTime('NOW');
$hour = $date->format('G');
if (($hour > 10) && ($hour < 20)) {
    echo "<body style='background-image: url(../images/1.jpg)'>";
} else {
    echo "<body style='background-image: url(../images/0f18591acaee82fd476d4dc811b5d999.jpeg)'>";

}