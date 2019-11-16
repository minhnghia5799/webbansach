<?php
class ProductCategories
{
    private $id;
    private $name;

    public function __construct( $Id, $Name)
    {
    $this->id = $Id;
    $this->name = $Name;
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


}
?>
