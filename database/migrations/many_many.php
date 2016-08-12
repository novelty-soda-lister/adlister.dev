<?php

$_ENV = include __DIR__ . '/../../.env.php';
require_once '../db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS tags');

$query = 'CREATE TABLE tags (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(240) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (drinks id) REFERENCES drinks(drinks id),
  	FOREIGN KEY (user) REFERENCES users(user_id),
)';

$dbc->exec($query);