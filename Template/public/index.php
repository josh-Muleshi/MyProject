<?php
use App\Autoloader;

require '../app/Autoloader.php'; 
Autoloader::register(); 

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

ob_start();
if ($page === 'home') {
    require '../pages/home.php';
}elseif ($page === 'show') {
    require '../pages/show.php';
}
$content = ob_get_clean();
require '../pages/template/default.php';