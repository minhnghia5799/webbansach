<?php
class ShippingInfo
{
    private $id;
    private $userName;
    private $status;

    public function __construct( $Id, $UserName, $Status, $Country, $County, $Province, $StreetAddress, $Postcode, $Tel, $Notes)
    {
    $this->id = $Id;
    $this->userName = $UserName;
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

    public function getUserName()
    {
    return $this->userName;
    }

    public function setUserName($UserName)
    {
    $this->userName = $UserName;
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