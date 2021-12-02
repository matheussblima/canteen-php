<?php
session_start();
require_once('environment.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//testa a variável url que veio lá do htaccess
if (isset($_GET['url'])) //se estiver preenchida, pega o valor
{
  $url =  strtolower($_GET['url']);
  switch ($url) {
    case "home":
      require "controllers/home.php";
      $controlador = new Home();
      $controlador->processRequest();
      break;
    case "registration_school":
      require "controllers/registrationSchool.php";
      $controlador = new RegistrationSchool();
      $controlador->processRequest();
      break;
    case "login":
      require "controllers/login.php";
      $controlador = new Login();
      $controlador->processRequest();
      break;
    case "canteen":
      require "controllers/canteen.php";
      $controlador = new Canteen();
      $controlador->processRequest();
      break;
    default:
      require "controllers/home.php";
      $controlador = new Home();
      $controlador->processRequest();
      break;
  }
} else
  $url = '404.php';