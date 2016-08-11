<?php

require_once __DIR__ . '/../../models/User.php';

$user = new User;
$user->name = 'Soda Shaque';
$user->email = 'shaque@soda.com';
$user->username = "Kazaam";
$user->password = $_ENV['USER_PASS'];
$user->save();

