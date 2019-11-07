<?php
class Products
{
    private $id;
    private $name;
    private $category;
    private $price;
    private $sale;
    private $imageLink;

    public function __construct( $Id, $Name, $Category, $Price, $Sale, $ImageLink)
    {
    $this->id = $Id;
    $this->name = $Name;
    $this->category = $Category;
    $this->price = $Price;
    $this->sale = $Sale;
    $this->imageLink = $ImageLink;
    }

    public function getId()
    {
    return $this->id;
    }

    public function setId($Id)
    {
    $this->id = $Id;
    }

    public function getName()
    {
    return $this->name;
    }

    public function setName($Name)
    {
    $this->name = $Name;
    }

    public function getCategory()
    {
    return $this->category;
    }

    public function setCategory($Category)
    {
    $this->category = $Category;
    }

    public function getPrice()
    {
    return $this->price;
    }

    public function setPrice($Price)
    {
    $this->price = $Price;
    }

    public function getSale()
    {
    return $this->sale;
    }

    public function setSale($Sale)
    {
    $this->sale = $Sale;
    }

    public function getImageLink()
    {
    return $this->imageLink;
    }

    public function setImageLink($ImageLink)
    {
    $this->imageLink = $ImageLink;
    }


}
?>