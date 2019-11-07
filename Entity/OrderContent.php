<?php
class OrderContent
{
    private $orderId;
    private $productId;
    private $amount;

    public function __construct( $OrderId, $ProductId, $Amount)
    {
    $this->orderId = $OrderId;
    $this->productId = $ProductId;
    $this->amount = $Amount;
    }

    public function getOrderId()
    {
    return $this->orderId;
    }

    public function setOrderId($OrderId)
    {
    $this->orderId = $OrderId;
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