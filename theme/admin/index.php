<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'list_post';
$path = "./pages/{$page}.php";

require './inc/header.php';

if (file_exists($path)) {
    require "{$path}";
} else {
    require "./pages/404.php";
}

require './inc/footer.php';
?>