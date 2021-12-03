<?php
require_once "IControlador.php";
require_once "models/product.php";

class RegisterProducts implements IControlador
{
    private $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function processRequest()
    {
        require "views/registerProducts.php";
    }

    public function registerProductsForm()
    {
        try {
            if (isset($_POST['name']) && isset($_POST['description']) && isset($_POST['price']) && isset($_POST['quantity']) && isset($_POST['image'])) {

                $this->product->setName($_SESSION['name']);
                $this->product->setDescription($_POST['description']);
                $this->product->setQuantity($_POST['quantity']);
                $this->product->setUnitPrice($_POST['price']);
                $this->product->setImage($_POST['image']);


                $this->product->addProduct();
            }
            // header('Location:register_products?is_success_registration=true', true, 302);
        } catch (string $e) {
            header('Location:register_products?is_success_registration=false', true, 302);
        }
    }
}