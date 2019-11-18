<?php

	require_once SITE_ROOT."/Model/ProductModel.php";	
	require_once SITE_ROOT."/Services/ShopServices.php";


	$pModel = new ProductModel();
	$sServices = new ShopServices();
    if (!isset($_GET['page'])) require_once SITE_ROOT."/View/error.html";
    else if ($_GET['page']=='home') 
    {
        $list10 = $pModel->get10ProductNew($sServices->getAllProducts());
        $list3N = $pModel->get3ProductNew($sServices->getAllProducts());
        $list3V = $pModel->get3ProductViewed($sServices->getAllProducts());
        $list3S = $pModel->get3ProductSelled($sServices->getAllProducts());
        require_once SITE_ROOT."/View/home.php";
    }
    else if (isset($_GET['num']))
    {
        $number = $_GET['num'];
        $total = $sServices->getNumberPageProducts();
        if ($number > $total || $number < 0) require_once SITE_ROOT."/View/error.html";
        else
        {
            $listShop = $pModel->getProductByNumberList($_GET['num'], $sServices->getAllProducts());
            $listNum = $pModel->get5NumberList($_GET['num'], $total);
            require_once SITE_ROOT."/View/shop.php";
        } 
    }
    else require_once SITE_ROOT."/View/error.html";

?>