<?php
// echo phpinfo();

// exit;

require_once './services/connection.php';

$router = isset($_REQUEST['router']) ? $_REQUEST['router'] : '';

$method = isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'GET';

require_once "./routes/students/index.php";