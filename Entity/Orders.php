<?php
class Orders
{
    private $id;
    private $userId;
    private $totalPrice;
    private $status;

    public function __construct( $Id, $UserId, $TotalPrice, $Status)
    {
    $this->id = $Id;
    $this->userId = $UserId;
    $this->totalPrice = $TotalPrice;
    $this->status = $Status;
    }

    public function getId()
    {
    return $this->id;
    }

    public function setId($Id)
    {
    $this->id = $Id;
    }

    public function getUserId()
    {
    return $this->userId;
    }

    public function setUserId($UserId)
    {
    $this->userId = $UserId;
    }

    public function getTotalPrice()
    {
    return $this->totalPrice;
    }

    public function setTotalPrice($TotalPrice)
    {
    $this->totalPrice = $TotalPrice;
    }

    public function getStatus()
    {
    return $this->status;
    }

    public function setStatus($Status)
    {
    $this->status = $Status;
    }
}
?>