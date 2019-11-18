<?php
class Products
{
    private $id;
    private $name;
    private $category;
    private $price;
    private $sale;
    private $imageLink;
    private $selledAmount;
    private $viewedAmount;

    public function __construct( $Id, $Name, $Category, $Price, $Sale, $ImageLink, $SelledAmount, $ViewedAmount)
    {
    $this->id = $Id;
    $this->name = $Name;
    $this->category = $Category;
    $this->price = $Price;
    $this->sale = $Sale;
    $this->imageLink = $ImageLink;
    $this->selledAmount = $SelledAmount;
    $this->viewedAmount = $ViewedAmount;
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

    public function getSelledAmount()
    {
    return $this->selledAmount; 
    }
    
    public function setSelledAmount($SelledAmount)
    {
    $this->selledAmount = $SelledAmount; 
    }

    public function getViewedAmount()
    {
    return $this->viewedAmount;
    }
   
    public function setViewedAmount($ViewedAmount)
    {
    $this->viewedAmount = $ViewedAmount;
    }
}
?>