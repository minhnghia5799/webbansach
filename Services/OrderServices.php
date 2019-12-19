<?php

require_once SITE_ROOT."/Dao/OrdersDao.php";
require_once SITE_ROOT."/Dao/OrderContentDao.php";

class ShopServices
{
	private $orderDao;
	private $orderContentDao;

	public function __construct() {
		$this->ordersDao = new OrdersDao();
		$this->orderContentDao = new OrderContentDao();
    }


    // Orders
    public function getOrdersByUserName($userName)
    {
        return $this->ordersDao->getOrdersByUserName($userName);
    }

    public function insertOrders($Orders)
    {
        $this->ordersDao->insertOrders($Orders);
    }

    public function updateOrders($UserName, $Status)
    {
        $this->ordersDao->updateOrders($UserName, $Status);
    }

    public function deleteOrders($Id)
    {
    	$this->ordersDao->deleteOrders($Id);
    }


    // OrderContent
    public function getAllOrderContent()
    {
    	return $this->orderContentDao->getAllOrderContent();
    }

    public function getIdByNameOrderContent($Name)
    {
    	return $this->orderContentDao->getIdByNameOrderContent($Name);
    }

    public function getNameById($Id)
    {
        return $this->orderContentDao->getNameById($Id);
    }

    public function insertOrderContent($OrderContent)
    {
    	$this->orderContentDao->insertOrderContent($OrderContent);
    }

    public function updateOrderContent($OrderContent)
    {
    	$this->orderContentDao->updateOrderContent($OrderContent);
    }

    public function deleteOrderContent($Id)
    {
    	$this->orderContentDao->deleteOrderContent($Id);
    }
}

?>