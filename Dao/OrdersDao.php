<?php

require_once SITE_ROOT."/Config/DBCon.php";
require_once SITE_ROOT."/Entity/Orders.php";
 
class OrdersDao extends DBConnection
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getOrdersByUserName($UserName)
    {
        $result = $this->runQuery(" SELECT * from orders where userName ='$UserName'");
        $OrdersList = array();
        while ($row = $result->fetch_assoc())
        {
            $Orders= new Orders(
            $row['userName'],
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

    public function updateOrders($UserName,$Status)
    {
        return $this->runQuery(
            "UPDATE orders
                SET 
                    status='{$Status}'
                WHERE userName='{$UserName}'"
        );
    }

    public function deleteOrders($UserName)
    {
        $this->runQuery("DELETE FROM orders WHERE userName={$UserName}");
    }

}

?>