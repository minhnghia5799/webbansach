<?php
class ShippingInfoContent
{
    private $idShip;
    private $productId;
    private $amount;

    public function __construct( $IdShip, $ProductId, $Amount)
    {
    $this->idShip = $IdShip;
    $this->productId = $ProductId;
    $this->amount = $Amount;
    }

    public function getIdShip()
    {
    return $this->idShip;
    }

    public function setIdShip($IdShip)
    {
    $this->idShip = $IdShip;
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