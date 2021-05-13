<?php

$cnt = $_COOKIE['test1_LOGINOV'] ? $_COOKIE['test1_LOGINOV'] : 0;

setcookie('test1_LOGINOV', ++$cnt);

header("Content-Type: 'image/jpeg'");
echo file_get_contents("photo.jpg");