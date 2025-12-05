<?php 

$uri = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);

$uri = trim($uri, '/');


$routes = [
    'home' => 'home.php',
    'about' => 'about.php',
    'contact' => 'contact.php',
    'services' => 'services.php'
];

if($uri == '' || $uri == '/'){
    $page = 'home';
}
else{
    $page = $uri;
}

if(array_key_exists($page , $routes)){
    require 'controller/' . $routes[$page]; 
    
}

else {
    require 'views/404.php';
}


?>