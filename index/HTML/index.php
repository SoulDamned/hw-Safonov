<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Моя страница</title>
    <link rel="stylesheet" href="../Styles/Styles.css">
</head>
<body>
<header>
    <img src="../images/image_12106111005141139892.gif" width="100" height="100"  alt="Нету">
    <?php
    $string = "
Сафонов Максим

Здравствуйте! Проживаю в городе Магнитогорск. Работаю электриком на коксохимическом произдвестве ММК. Так же являюсь студентом 4 курса МГТУ им. Носова. There are 17 vowels in the string This is some text with some more text and even more text.
Опыта в IT сфере нет, но интерес всегда был. Решил расширить профессиональные навыки.
Любимый фильм
«Аватар» рассказывает историю инвалида войны, бывшего морского пехотинца Джейка Салли, прибывшего на планету Пандора, чтобы работать на ресурсодобывающую мегакорпорацию. Салли получает в своё распоряжение аватара — тело, которым он может управлять, находясь в трансе. Ему удаётся подружиться с разумными жителями планеты, народом На’ви. В конце концов Джейк становится военным вождём племени и объявляет корпорации войну.
Любимый сериал
Во все тяжкие - сериал рассказывает историю школьного учителя Уолтера Райта, который испытывая финансовые трудности становится на скользкий путь криминала.
Любимая группа
Slipknot - американская хэви-метал-группа, созданная в Де-Мойне, штат Айова, в 1995 году перкуссионистом Шоном Крэханом, барабанщиком Джоуи Джордисоном и басистом Полом Греем. После нескольких изменений состава в первые годы существования группа более десяти лет состояла из девяти человек: Крэхана, Джордисона, Грея, Крейга Джонса, Мика Томсона, Кори Тейлора, Сида Уилсона, Криса Фена и Джима Рута.
Любимая книга
«Властелин Колец» Джона Толкина повествует о Великой войне за Кольцо, о войне, длившейся не одну тысячу лет. Овладевший Кольцом получает власть над всем живым и мертвым, но при этом должен служить Злу! Юному хоббиту Фродо выпадает участь уничтожить Кольцо.
Любимый фильм
«Аватар» рассказывает историю инвалида войны, бывшего морского пехотинца Джейка Салли, прибывшего на планету Пандора, чтобы работать на ресурсодобывающую мегакорпорацию. Салли получает в своё распоряжение аватара — тело, которым он может управлять, находясь в трансе. Ему удаётся подружиться с разумными жителями планеты, народом На’ви. В конце концов Джейк становится военным вождём племени и объявляет корпорации войну.
Любимый сериал
Во все тяжкие - сериал рассказывает историю школьного учителя Уолтера Райта, который испытывая финансовые трудности становится на скользкий путь криминала.
Любимая группа
Slipknot - американская хэви-метал-группа, созданная в Де-Мойне, штат Айова, в 1995 году перкуссионистом Шоном Крэханом, барабанщиком Джоуи Джордисоном и басистом Полом Греем. После нескольких изменений состава в первые годы существования группа более десяти лет состояла из девяти человек: Крэхана, Джордисона, Грея, Крейга Джонса, Мика Томсона, Кори Тейлора, Сида Уилсона, Криса Фена и Джима Рута.
Любимая книга
«Властелин Колец» Джона Толкина повествует о Великой войне за Кольцо, о войне, длившейся не одну тысячу лет. Овладевший Кольцом получает власть над всем живым и мертвым, но при этом должен служить Злу! Юному хоббиту Фродо выпадает участь уничтожить Кольцо.";
    $arr = str_word_count($string, 2, 'АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя');
    $count = count($arr);
    date_default_timezone_set('Asia/Yekaterinburg');
    $date_1 = '18.05.1991';
    $date_2 = date('Y-m-d H:i:s');
    $seconds = abs(strtotime($date_1) - strtotime($date_2));
    echo '<div style="color: red">' . "На моей странице: " . '<br>' . preg_match_all('/[уеыаоэию]/i', $string, $matches) . " гласных букв." . '<br>' . $count . " слова" . '<br>' . "Дата рождения - 18.05.1991" .  '<br>' . "Текущая дата- " . date('Y-m-d H:i:s') . '<br>' .  "Разница между датами -" . round($seconds / 86400, 1) . '</div>';
    ?>
</header>
<?php

$date = new DateTime('NOW');
$hour = $date->format('G');
if ( ($hour > 10) && ($hour <20) ) {
    echo "<body style='background-image: url(../images/1.jpg)'>";
} else {
    echo "<body style='background-image: url(../images/0f18591acaee82fd476d4dc811b5d999.jpeg)'>";

}
?>
<div class="one">
        <img src="../images/WP_20140323_062.jpg" height="600" width="400" alt="none">
    <div class="two">
        <div class="three">
            <p> Сафонов Максим</p>
        </div>
        <div class="break">
        </div>
        <div class="four">
            <?php
            $title = 'Здравствуйте! Проживаю в городе Магнитогорск. Работаю электриком на коксохимическом произдвестве ММК. Так же являюсь студентом 4 курса МГТУ им. Носова.';
            $title = explode(" ", $title, 2);
            $red =Array('green', 'red', 'lightblue','yellow','brown','orange','pink');
            $rand = array_rand($red);
            echo '<span style="color:'.$red[$rand].'">'  . $title[0] . '</span> ' . $title[1];
            ?>
        </div>
        <div class="five">
            Опыта в IT сфере нет, но интерес всегда был. Решил расширить профессиональные навыки.
        </div>
    </div>
</div>
<div class="oone">
    <div class="ttwo">
        <div class="tthree">
            <h4>
                Любимый фильм
            </h4>
            <img class="TT" src="../images/Avatar-2009.jpg" alt="none">
        </div>
        <div class="break"></div>
        <div class="tthree">
            «Аватар» рассказывает историю инвалида войны, бывшего морского пехотинца Джейка Салли,
            прибывшего на планету Пандора, чтобы работать на ресурсодобывающую мегакорпорацию. Салли получает в своё
            распоряжение аватара — тело, которым он может управлять, находясь в трансе. Ему удаётся подружиться с
            разумными жителями планеты, народом На’ви. В конце концов Джейк становится военным вождём племени и
            объявляет корпорации войну.
        </div>
    </div>
    <div class="ttwo">
        <div class="tthree">
            <h4>
                Любимый сериал
            </h4>
            <img class="TT" src="../images/586459561595441473.jpg" alt="none">
        </div>
        <div class="break"></div>
        <div class="tthree">
            Во все тяжкие - сериал рассказывает историю школьного учителя Уолтера Райта, который испытывая финансовые
            трудности становится на скользкий путь криминала.
        </div>
    </div>
    <div class="ttwo">
        <div class="tthree">
            <h4>
                Любимая группа
            </h4>
            <img class="TT" src="../images/6dd181aaeed967a24f3e36d04e041729.jpg" alt="none">
        </div>
        <div class="break"></div>
        <div class="tthree">
            Slipknot - американская хэви-метал-группа, созданная в Де-Мойне, штат Айова, в 1995 году
            перкуссионистом Шоном Крэханом, барабанщиком Джоуи Джордисоном и басистом Полом Греем. После нескольких
            изменений состава в первые годы существования группа более десяти лет состояла из девяти человек: Крэхана,
            Джордисона, Грея, Крейга Джонса, Мика Томсона, Кори Тейлора, Сида Уилсона, Криса Фена и Джима Рута.
        </div>
    </div>
    <div class="ttwo">
        <div class="tthree">
            <h4>
                Любимая книга
            </h4>
            <img class="TT" src="../images/6458699441.jpg" alt="none">
        </div>
        <div class="break"></div>
        <div class="tthree">
            «Властелин Колец» Джона Толкина повествует о Великой войне за Кольцо, о войне, длившейся не одну тысячу лет.
            Овладевший Кольцом получает власть над всем живым и мертвым, но при этом должен служить Злу! Юному хоббиту
            Фродо выпадает участь уничтожить Кольцо.
        </div>
    </div>
</div>
<section class="grid">
    <div class="ffour">
        <h4>
            Любимый фильм
        </h4>
        <img class="TT" src="../images/Avatar-2009.jpg" alt="none">
        <div class="break"></div>
        «Аватар» рассказывает историю инвалида войны, бывшего морского пехотинца Джейка Салли,
        прибывшего на планету Пандора, чтобы работать на ресурсодобывающую мегакорпорацию. Салли получает в своё
        распоряжение аватара — тело, которым он может управлять, находясь в трансе. Ему удаётся подружиться с
        разумными жителями планеты, народом На’ви. В конце концов Джейк становится военным вождём племени и
        объявляет корпорации войну.
    </div>
    <div class="ffour">
        <h4>
            Любимый сериал
        </h4>
        <img class="TT" src="../images/586459561595441473.jpg" alt="none">
        <div class="break"></div>
        Во все тяжкие - сериал рассказывает историю школьного учителя Уолтера Райта, который испытывая финансовые
        трудности становится на скользкий путь криминала.
    </div>
</section>
<section class="grid">
    <div class="ffour">
        <h4>
            Любимая группа
        </h4>
        <img class="TT" src="../images/6dd181aaeed967a24f3e36d04e041729.jpg" alt="none">
        <div class="break"></div>
        Slipknot - американская хэви-метал-группа, созданная в Де-Мойне, штат Айова, в 1995 году
        перкуссионистом Шоном Крэханом, барабанщиком Джоуи Джордисоном и басистом Полом Греем. После нескольких
        изменений состава в первые годы существования группа более десяти лет состояла из девяти человек: Крэхана,
        Джордисона, Грея, Крейга Джонса, Мика Томсона, Кори Тейлора, Сида Уилсона, Криса Фена и Джима Рута.
    </div>
    <div class="ffour">
        <h4>
            Любимая книга
        </h4>
        <img class="TT" src="../images/6458699441.jpg" alt="none">
        <div class="break"></div>
        «Властелин Колец» Джона Толкина повествует о Великой войне за Кольцо, о войне, длившейся не одну тысячу лет.
        Овладевший Кольцом получает власть над всем живым и мертвым, но при этом должен служить Злу! Юному хоббиту
        Фродо выпадает участь уничтожить Кольцо.
    </div>
</section>
</body>
</html>
