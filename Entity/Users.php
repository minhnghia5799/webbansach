<?php
class Users
{
    private $userName;
    private $pass;
    private $email;
    private $name;
    private $province;
    private $address;
    private $phoneNumber;
   

    public function __construct( $UserName,$Pass  ,$Name, $Province, $Address, $PhoneNumber)
    {
    $this->userName = $UserName;
    $this->pass = $Pass;
    $this->name = $Name;
    $this->province = $Province;
    $this->address = $Address;
    $this->phoneNumber = $PhoneNumber;
    }

    public function getUserName()
    {
    return $this->userName;
    }

    public function setUserName($UserName)
    {
    $this->userName = $UserName;
    }

    public function getPass()
    {
    return $this->pass;
    }

    public function setPass($Pass)
    {
    $this->pass = $Pass;
    }

    public function getName()
    {
    return $this->name;
    }

    public function setName($Name)
    {
    $this->name = $Name;
    }

    public function getProvince()
    {
    return $this->province;
    }

    public function setProvince($Province)
    {
    $this->province = $Province;
    }

    public function getAddress()
    {
    return $this->address;
    }

    public function setAddress($Address)
    {
    $this->address = $Address;
    }

    public function getPhoneNumber()
    {
    return $this->phoneNumber;
    }

    public function setPhoneNumber($PhoneNumber)
    {
    $this->phoneNumber = $PhoneNumber;
    }


}
?>