<?php

// Inclui arquevos de controlador nessesario para lidar com diferentes ações 
require 'controllers/Authcontroller.php'; // Inclui o comtroladoe de autenticação 
require 'controllers/UserController.php'; //Inclui o controlador de usuário 
require 'controllers/DashboardController.php'; // Inclui o controlador de dashaboard 

// Criar insâncias dos controladores para utilizar seus métodos 
$authController = new AuthController(); //Instancia controlador de autenticação 
$userControoler = new UserContreller(); // Instancia controlador de usuário
$dashboardController = new DashboardController(); // Instancia controlador de dashboard

// Coleta a ação de URL, se não houver ação definida, usa 'login' como padrão
$action = $_GET['action'] ?? 'login'; // Usa operador de coalescência nula (??) para definir 'login' se ´action´ não estiver presente

switch($action){
    case 'login':
        $authController ->login(); // chama o método de login do controlador de autenticação 
        break;
    case 'register':
            UserContreller->reagir();
            break;
    default:
        AuthController->login();
        break;
}

?>