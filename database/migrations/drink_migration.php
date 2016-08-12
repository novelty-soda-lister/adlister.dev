<?php

$_ENV = include __DIR__ . '/../../.env.php';
require_once '../db_connect.php';


$dbc->exec('DROP TABLE IF EXISTS drinks');

$drinks = "CREATE TABLE drinks(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	name VARCHAR(240) NOT NULL,
    price FLOAT UNSIGNED NOT NULL,
    description TEXT NOT NULL,
    image_url VARCHAR(255) NOT NULL DEFAULT 'http://placehold.it/200x250',
    user_id INT UNSIGNED NOT NULL,
    PRIMARY KEY (id)
)";

$dbc->exec($drinks);