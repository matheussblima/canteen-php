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
    case "responsible":
      require "controllers/responsible.php";
      $controlador = new Responsible();
      $controlador->processRequest();
      break;
    case "register_responsible":
      require "controllers/registerResponsible.php";
      $controlador = new RegisterResponsible();
      $controlador->processRequest();
      break;
    case "register_responsible_form":
      require "controllers/registerResponsible.php";
      $controlador = new RegisterResponsible();
      $controlador->registerResponsibleForm();
      break;
    case "register_student_form":
      require "controllers/registerStudent.php";
      $controlador = new RegisterStudent();
      $controlador->processRequest();
      break;
    case "student":
      require "controllers/student.php";
      $controlador = new Student();
      $controlador->processRequest();
      break;
    case "register_products":
      require "controllers/registerProducts.php";
      $controlador = new RegisterProducts();
      $controlador->processRequest();
      break;
    case "register_products_form":
      require "controllers/registerProducts.php";
      $controlador = new RegisterProducts();
      $controlador->registerProductsForm();
      break;
    case "list_products":
      require"controllers/listProducts.php";
      $controlador = new ListProducts();
      $controlador->processRequest();
      break;
    case "delete_product";
      require"controllers/deleteProduct.php";
      $controlador = new DeleteProduct();
      $controlador->processRequest();
    case "edit_product_form";
      require"controllers/editProduct.php";
      $controlador = new EditProduct();
      $controlador->editProductsForm();
    case "edit_product";
      require"controllers/editProduct.php";
      $controlador = new EditProduct();
      $controlador->processRequest();
    default:
      require "controllers/home.php";
      $controlador = new Home();
      $controlador->processRequest();
      break;
  }
} else
  $url = '404.php';