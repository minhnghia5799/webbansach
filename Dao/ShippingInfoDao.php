<?php

require_once SITE_ROOT."/Config/DBCon.php";
require_once SITE_ROOT."/Entity/ShippingInfo.php";
 
class ShippingInfoDao extends DBConnection
{
    public function __construct()
    {
        parent::__construct();
    }

    /*public function getShippingInfoByUserIdAndStatus($UserId, $Status)
    {
        $result = $this->runQuery(" SELECT * from ShippingInfo where userid ='$UserId' && status = '$Status' ");
        $ShippingInfoList = array();
        while ($row = $result->fetch_assoc())
        {
            $ShippingInfo= new ShippingInfo(
            $row['id'],
            $row['userid'],
            $row['totalPrice'],
            $row['status']
            );
            array_push($ShippingInfoList, $ShippingInfo);
        }
        $result->free();
        return $ShippingInfoList;
    }*/

    public function insertShippingInfo($ShippingInfo)
    {
        return $this->runQuery(
            "INSERT INTO shippingInfo(id,userName,status)
            value (
                
                '{$ShippingInfo->getId()}',
                '{$ShippingInfo->getUserName()}',
                '{$ShippingInfo->getStatus()}'
            )"
        );
    }

    public function updateShippingInfo($ShippingInfo)
    {
        return this->runQuery(
            "UPDATE shippingInfo
                SET 
                    id='{$ShippingInfo->getId()}',
                    status='{$ShippingInfo->getStatus()}'
                WHERE userName='{$ShippingInfo->getUserName()}'"
        );
    }

    public function deleteShippingInfo($UserName)
    {
        $this->runQuery("DELETE FROM shippingInfo WHERE userName={$UserName}");
    }

}

?>