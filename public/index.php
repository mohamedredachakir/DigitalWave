


<?php 

$page = $_GET['page'] ?? 'home';

switch ($page){
      case 'home':
        $view = '../views/home.php';
        $title = 'Accueil';
        break;

    case 'about':
        $view = '../views/about.php';
        $title = 'À propos';
        break;

    case 'services':
        $view = '../views/services.php';
        $title = 'Services';
        break;

    case 'contact':
        $view = '../views/contact.php';
        $title = 'Contact';
        break;

    default:
        $view = '../views/404.php';
        $title = 'Page introuvable';
}

include('../views/layout.php');

?>