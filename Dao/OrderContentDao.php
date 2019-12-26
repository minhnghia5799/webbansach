<?php
require_once SITE_ROOT."/Config/DBCon.php";
require_once SITE_ROOT."/Entity/OrderContent.php";

class OrderContentDao extends DBConnection
{

    public function __construct() {
		parent::__construct();
    }
    
    public function getOrderContentByUserName($UserName)
    {
        $result = $this->runQuery("SELECT *	FROM ordercontent WHERE userName = '{$UserName}'");
        $OrderContentList = array();
        while ($row = $result->fetch_assoc())
        {
            $OrderContent = new OrderContent(
                $row['userName'],
                $row['productId'],
                $row['amount']
            );
            array_push($OrderContentList,$OrderContent);
        }
        $result->free();
        return $OrderContentList;
    }

    public function getOneOrderContent($UserName, $ProductId)
    {
        $result = $this->runQuery("SELECT *	FROM ordercontent WHERE userName = '{$UserName}' AND productId = {$ProductId}");
        $row = $result->fetch_assoc();
        return new Ordercontent(
            $row['userName'],
            $row['productId'],
            $row['amount']
        );
    }

    public function insertOrderContent($OrderContent)
    {
        return $this->runQuery(
            "INSERT INTO ordercontent(userName,productId,amount)
            VALUE (
                '{$OrderContent->getUserName()}',
                {$OrderContent->getProductId()},
                {$OrderContent->getAmount()}
                )"
            );
    }

    public function updateOrderContent($OrderContent)
    {
        return $this->runQuery(
            "UPDATE ordercontent
                SET 
                    amount={$OrderContent->getAmount()}
            WHERE userName='{$OrderContent->getUserName()}' AND productId={$OrderContent->getProductId()}"
        );
    }
    public function deleteOrderContent($UserName, $ProductId)
    {
        $this->runQuery("DELETE FROM ordercontent WHERE userName='{$UserName}'");
    }
}

?>