<?php
class Orders
{
   
    private $userName;
    
    private $status;

    public function __construct($UserName, $Status)
    {
    $this->userName = $UserName;
    $this->status = $Status;
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