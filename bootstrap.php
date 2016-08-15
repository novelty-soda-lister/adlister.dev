<?php
session_start();

// require models
require_once __DIR__ . '/models/User.php';
require_once __DIR__ . '/models/Drinks.php';
require_once __DIR__ . '/models/contact_us.php';


// require helper classes
require_once __DIR__ . '/utils/Auth.php';
require_once __DIR__ . '/utils/Input.php';


// require front controller
require_once __DIR__ . '/controllers/PageController.php';