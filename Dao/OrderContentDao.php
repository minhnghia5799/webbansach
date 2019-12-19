<?php
require_once SITE_ROOT."/Config/DBCon.php";
require_once SITE_ROOT."/Entity/OrderContent.php";

class OrderContentDao extends DBConnection
{

    public function __construct() {
		parent::__construct();
    }
    
    public function getOrderContentByUserName($OrderId)
    {
        $result = $this->runQuery("SELECT *	FROM ordercontent WHERE userName = '{$UserName}'");
        $OrderContentList = array();
        while ($row = $result->fetch_assoc())
        {
            $OrderContent = new Ordercontent(
                $row['userName'],
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
            "INSERT INTO ordercontent(userName,productId,amount)
            VALUE (
                '{$OrderContent->getUserName}',
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
                WHERE userName='{$OrderContent->getUserName}'"
        );
    }
    public function deleteOrderContent($UserName)
    {
        $this->runQuery("DELETE FROM ordercontent WHERE userName={$UserName}");
    }
}

?>