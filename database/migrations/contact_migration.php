<?php

$_ENV = include __DIR__ . '/../../.env.php';
require_once '../db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS contacts');

$query = 'CREATE TABLE contacts (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(240) NOT NULL,
    email VARCHAR(240) NOT NULL,
    message TEXT NOT NULL,
    PRIMARY KEY (id)
)';

$dbc->exec($query);