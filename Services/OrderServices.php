<?php

require_once SITE_ROOT."/Dao/OrdersDao.php";
require_once SITE_ROOT."/Dao/OrderContentDao.php";
require_once SITE_ROOT."/Dao/UsersDao.php";

class OrderServices
{
	private $orderDao;
    private $orderContentDao;
    private $usersDao;
    

	public function __construct() {
		$this->ordersDao = new OrdersDao();
        $this->orderContentDao = new OrderContentDao();
        $this->usersDao = new UsersDao();
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
    public function getOrderContentByUserName($UserName)
    {
    	return $this->orderContentDao->getOrderContentByUserName();
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

    // UsersDao
    public function getAllUsers()
    {
        return $this->usersDao->getAllUsers();
    }

    public function insertUsers($Users)
    {
        $this->usersDao->insertUsers($Users);
    }

    public function updateUsers($Users)
    {
        $this->usersDao->updateUsers($Users);
    }

    public function deleteUsers($UsersName)
    {
        $this->usresDao->deleteUsers($Users);
    }
}

?>