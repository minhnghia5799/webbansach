<?php
class OrderContent
{
    private $userName;
    private $productId;
    private $amount;

    public function __construct( $UserName, $ProductId, $Amount)
    {
    $this->userName = $UserName;
    $this->productId = $ProductId;
    $this->amount = $Amount;
    }

    public function getUserName()
    {
    return $this->userName;
    }

    public function setUserName($UserName)
    {
    $this->userName = $UserName;
    }

    public function getProductId()
    {
    return $this->productId;
    }

    public function setProductId($ProductId)
    {
    $this->productId = $ProductId;
    }

    public function getAmount()
    {
    return $this->amount;
    }

    public function setAmount($Amount)
    {
    $this->amount = $Amount;
    }


}
?>