<?php

// Wczytaj plik konfiguracyjny aplikacji
$config = include ('../config/app.php');

// Wczytaj router
require_once ('../app/core/Router/Router.php');

// Wczytaj plik tras
$routes = include ('../config/routes.php');

// Inicjalizuj router z trasami
$router = new Router($routes);

// Obsłuż żądanie HTTP
$router->route();

?>