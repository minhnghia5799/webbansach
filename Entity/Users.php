<?php
class Users
{
    private $orderId;
    private $firstname;
    private $lastname;
    private $country;
    private $county;
    private $province;
    private $streetAddress;
    private $postcode;
    private $tel;
    private $notes;

    public function __construct( $OrderId, $Firstname, $Lastname, $Country, $County, $Province, $StreetAddress, $Postcode, $Tel, $Notes)
    {
    $this->orderId = $OrderId;
    $this->firstname = $Firstname;
    $this->lastname = $Lastname;
    $this->country = $Country;
    $this->county = $County;
    $this->province = $Province;
    $this->streetAddress = $StreetAddress;
    $this->postcode = $Postcode;
    $this->tel = $Tel;
    $this->notes = $Notes;
    }

    public function getOrderId()
    {
    return $this->orderId;
    }

    public function setOrderId($OrderId)
    {
    $this->orderId = $OrderId;
    }

    public function getFirstname()
    {
    return $this->firstname;
    }

    public function setFirstname($Firstname)
    {
    $this->firstname = $Firstname;
    }

    public function getLastname()
    {
    return $this->lastname;
    }

    public function setLastname($Lastname)
    {
    $this->lastname = $Lastname;
    }

    public function getCountry()
    {
    return $this->country;
    }

    public function setCountry($Country)
    {
    $this->country = $Country;
    }

    public function getCounty()
    {
    return $this->county;
    }

    public function setCounty($County)
    {
    $this->county = $County;
    }

    public function getProvince()
    {
    return $this->province;
    }

    public function setProvince($Province)
    {
    $this->province = $Province;
    }

    public function getStreetAddress()
    {
    return $this->streetAddress;
    }

    public function setStreetAddress($StreetAddress)
    {
    $this->streetAddress = $StreetAddress;
    }

    public function getPostcode()
    {
    return $this->postcode;
    }

    public function setPostcode($Postcode)
    {
    $this->postcode = $Postcode;
    }

    public function getTel()
    {
    return $this->tel;
    }

    public function setTel($Tel)
    {
    $this->tel = $Tel;
    }

    public function getNotes()
    {
    return $this->notes;
    }

    public function setNotes($Notes)
    {
    $this->notes = $Notes;
    }


}
?>