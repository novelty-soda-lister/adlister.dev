<?php
require_once __DIR__ . '/../bootstrap.php';
var_dump($request);
?>
<!DOCTYPE html>
<html>
<head>
    <?php require '../views/partials/head.php'; ?>
</head>
<body>
    <?php require '../views/partials/navbar.php'; ?>

    <?php require $main_view; ?>

    <?php require '../views/partials/common_js.php'; ?>
</body>
</html>