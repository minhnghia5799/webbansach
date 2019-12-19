<?php

require_once SITE_ROOT."/Config/DBCon.php";
require_once SITE_ROOT."/Entity/ShippingInfocontent.php";
 
class ShippingInfocontentDao extends DBConnection
{
    public function __construct()
    {
        parent::__construct();
    }

    /*public function getShippingInfocontentByUserIdAndStatus($UserId, $Status)
    {
        $result = $this->runQuery(" SELECT * from ShippingInfocontent where userid ='$UserId' && status = '$Status' ");
        $ShippingInfocontentList = array();
        while ($row = $result->fetch_assoc())
        {
            $ShippingInfocontent= new ShippingInfocontent(
            $row['id'],
            $row['userid'],
            $row['totalPrice'],
            $row['status']
            );
            array_push($ShippingInfocontentList, $ShippingInfocontent);
        }
        $result->free();
        return $ShippingInfocontentList;
    }*/

    public function insertShippingInfocontent($ShippingInfocontent)
    {
        return $this->runQuery(
            "INSERT INTO shippingInfocontent(idShip,productId,amount)
            value (
                
                '{$ShippingInfocontent->getIdShip()}',
                '{$ShippingInfocontent->getProductId()}',
                '{$ShippingInfocontent->getAmount()}'
            )"
        );
    }

    public function updateShippingInfocontent($ShippingInfocontent)
    {
        return this->runQuery(
            "UPDATE shippingInfocontent
                SET 
                    ProductId='{$ShippingInfocontent->getProductId()}',
                    amount='{$ShippingInfocontent->getAmount()}'
                WHERE idShip='{$ShippingInfocontent->getIdShip()}'"
        );
    }

    public function deleteShippingInfocontent($IdShip)
    {
        $this->runQuery("DELETE FROM shippingInfocontent WHERE userName={$IdShip}");
    }

}

?>