<?php
include_once 'controllers/encrypt.php';
require_once 'productsDAO.php';

class Product
{
    private $id;
    private $name;
    private $description;
    private $quantity;
    private $unitPrice;
    private $image;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;
    }

    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function addProduct()
    {
        $product = new ProductDAO();
        $product->setProduct($this);
    }

    public function getAllProducts()
    {
        $product = new ProductDAO();
        return $product->getProducts();
    }
}