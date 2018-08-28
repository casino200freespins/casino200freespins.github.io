<?php
$url = [
    'http://google.ru',
    'http://yandex.ru',
];
 
$rand = rand(0, count($url) - 1);
 
header('Location: ' . $url[$rand]);
