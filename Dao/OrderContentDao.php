<?php
require_once SITE_ROOT."/Config/DBCon.php";
require_once SITE_ROOT."/Entity/ProductCategories.php";

class OrderContentDao extends DBConnection
{

    public function __construct() {
		parent::__construct();
    }
    
    public function getOrderContentByOrderId($OrderId)
    {
        $result = $this->runQuery("SELECT *	FROM ordercontent WHERE orderId = '{$OrderId}'");
        $OrderContentList = array();
        while ($row = $result->fetch_assoc())
        {
            $OrderContent = new Ordercontent(
                $row['orderId'],
                $row['productId'],
                $row['amount']
            );
            array($OrderContentList,$OrderContent);
        }
        $result->free();
        return $OrderContentList;
    }

    public function insertOrderContent($OrderContent)
    {
        return $this->runQuery(
            "INSERT INTO ordercontent(orderId,productId,amount)
            VALUE (
                '{$OrderContent->getOrderId}',
                '{$OrderContent->getProductId}',
                '{$OrderContent->getAmount}'
                )"
            );
    }

    public function updateOrderContent($OrderContent)
    {
        return this->runQuery(
            "UPDATE ordercontent
                SET 
                    productId='{$OrderContent->getProductId}',
                    amount='{$OrderContent->getAmount}'
                WHERE orderId='{$OrderContent->getOrderId}'"
        );
    }
    public function deleteOrderContent($OrderId)
    {
        $this->runQuery("DELETE FROM ordercontent WHERE orderId={$OrderId}");
    }
}

?>