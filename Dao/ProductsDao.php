<?php

require_once SITE_ROOT."/Config/DBCon.php";
require_once SITE_ROOT."/Entity/Products.php";

class ProductsDao extends DBConnection
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllProducts()
    {
        $result = $this->runQuery("SELECT *	FROM products");
        $ProductsList = array();
        while ($row = $result->fetch_assoc())
        {
            $Products = new Products(
                $row['id'],
                $row['name'],
                $row['category'],
                $row['price'],
                $row['sale'],
                $row['imageLink'],
                $row['selledAmount'],
                $row['viewedAmount']
            );
            array_push($ProductsList, $Products);
        }
        $result->free();
        return $ProductsList;
    }

    public function getProductByCategory($CateId)
    {
        $result = $this->runQuery("SELECT *	FROM products WHERE category = {$CateId}");
        $ProductsList = array();
        while ($row = $result->fetch_assoc())
        {
            $Products = new Products(
                $row['id'],
                $row['name'],
                $row['category'],
                $row['price'],
                $row['sale'],
                $row['imageLink'],
                $row['selledAmount'],
                $row['viewedAmount']
            );
            array_push($ProductsList, $Products);
        }
        $result->free();
        return $ProductsList;
    }

    public function getProductById($Id)
    {
        $result = $this->runQuery("SELECT *	FROM products WHERE id = {$Id}");
        $row = $result->fetch_assoc();
        return new Products(
            $row['id'],
            $row['name'],
            $row['category'],
            $row['price'],
            $row['sale'],
            $row['imageLink'],
            $row['selledAmount'],
            $row['viewedAmount']
        );
    }

    public function insertProduct($Products)
    {
        return $this->runQuery(
            "INSERT INTO products(id,name,category,price,sale,imageLink,selledAmount,viewedAmount)
            VALUE(
                '{$Products->getId()}',
                '{$Products->getName()}',
                '{$Products->getCategory()}',
                '{$Products->getPrice()}',
                '{$Products->getSale()}',
                '{$Products->getImageLink()}',
                '{$Products->getSelledAmount()}',
                '{$Products->getViewedAmount()}'
            )"
        );
    }

    public function updateProduct($Products)
    {
        return $this->runQuery(
            "UPDATE products
            SET name ='{$Products->getName()}',
                category ='{$Products->getCategory()}',
                price ='{$Products->getPrice()}',
                sale ='{$Products->getSale()}',
                imageLink ='{$Products->getImageLink()}',
                selledAmount = '{$Products->getSelledAmount()}',
                viewedAmount = '{$Products->getViewedAmount()}'
            WHERE  id ={$Products->getId()} "
        );
    }

    public function updateViewedAmountProduct($ViewedAmount, $Id)
    {
        return $this->runQuery(
            "UPDATE products
            SET viewedAmount = {$ViewedAmount}
            WHERE  id ={$Id} "
        );
    }

    public function updateSelledAmountProduct($SelledAmount, $Id)
    {
        return $this->runQuery(
            "UPDATE products
            SET selledAmount = {$SelledAmount}
            WHERE  id ={$Id} "
        );
    }

    public function deleteProduct($Id)
    {
        $this->runQuery("DELETE FROM product WHERE id ={$Id}");
    }

}

?>