<?php
use App\Autoloader;

require '../app/Autoloader.php'; 
Autoloader::register(); 

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

if ($page === 'home') {
    require '../pages/home.php';
}