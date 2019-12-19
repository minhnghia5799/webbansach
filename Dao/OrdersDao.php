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
        $result = $this->runQuery(" SELECT * from orders where userid ='$UserId' && status = '$Status' ");
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
            "INSERT INTO orders(userName,status)
            value (
                
                '{$Orders->getUserName()}',
                
                '{$Orders->getStatus()}'
            )"
        );
    }

    public function updateOrders($Orders)
    {
        return this->runQuery(
            "UPDATE orders
                SET 
                    status='{$Orders->getStatus()}'
                WHERE userName='{$Orders->getUserName()}'"
        );
    }

    public function deleteOrders($UserName)
    {
        $this->runQuery("DELETE FROM orders WHERE userName={$UserName}");
    }

}

?>