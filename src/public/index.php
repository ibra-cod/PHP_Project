<?php

require './../vendor/autoload.php';


if(isset($_GET['p']) ? $path = $_GET['p'] : $path = '/')

if ($path === "/") {
    (new App\Controller\BlogController())->getHomePage();
} elseif ($path === "home") { 
    require './../View/frontend/home.php';

}elseif ($path === "show") {
    require './../View/frontend/show.php';
}





