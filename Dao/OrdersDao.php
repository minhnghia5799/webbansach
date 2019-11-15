<?php

require_once SITE_ROOT."/Config/DBCon.php";
require_once SITE_ROOT."/Entity/Orders.php";
 
class OrdersDao extends DBConnection
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getOrdersByUserIdAndStatus($UserId, $Status)
    {
        $result = $this->runQuery(" SELECT * from Orders where userid ='$UserId' && status = '$Status' ");
        $OrdersList = array();
        while ($row = $result->fetch_assoc())
        {
            $Orders= new Orders(
            $row['id'],
            $row['userid'],
            $row['totalPrice'],
            $row['status']
            );
            array_push($OrdersList, $Orders);
        }
        $result->free();
        return $OrdersList;
    }

    public function insertOrders($Orders)
    {
        return $this->runQuery(
            "INSERT INTO orders(id,userid,totalPrice,status)
            value (
                '{$Orders->getId()}',
                '{$Orders->getUserId()}',
                '{$Orders->getTotalPrice()}',
                '{$Orders->getStatus()}'
            )"
        );
    }

    public function updateOrders($Orders)
    {
        return this->runQuery(
            "UPDATE orders
                SET userid='{$Order->getUserId}',
                    totalPrice='{$Order->getTotalPrice}',
                    status='{$Order->getStatus}'
                WHERE id='{$Order->getId}'"
        );
    }

    public function deleteOrders($Id)
    {
        $this->runQuery("DELETE FROM orders WHERE id={$Id}");
    }

}

?>