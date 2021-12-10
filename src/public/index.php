<?php

require './../vendor/autoload.php';


if(isset($_GET['url']) ? $path = $_GET['url'] : $path = '/')

if ($path === "/") {
    (new App\Controller\BlogController())->getHomePage();
} elseif ($path === "home") { 
    require './../View/frontend/home.php';

}elseif ($path === "show") {
    require './../View/frontend/show.php';
}





