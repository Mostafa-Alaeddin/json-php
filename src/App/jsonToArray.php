<?php
$path = realpath(__DIR__ . DIRECTORY_SEPARATOR . '../App/users.json');

$get_users =  file_get_contents($path);

$users =  json_decode($get_users);
