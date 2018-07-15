<?php

include_once __DIR__ . '/../vendor/autoload.php';

use FC\FCEcho\FCColorStr;
use FC\FCEcho\FCEcho;

$str1 = new FCColorStr('red color');
$str1->setForegroundColor(FCColorStr::Red);

$str2 = new FCColorStr('blue color');
$str2->setForegroundColor(FCColorStr::Blue);

FCEcho::show($str1, ' ', $str2);
