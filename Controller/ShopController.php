<?php

	require_once SITE_ROOT."/Model/ProductModel.php";	

	$pModel = new ProductModel();
    if (!isset($_GET['page'])) require_once SITE_ROOT."/View/error.html";
    else if ($_GET['page']=='home') require_once SITE_ROOT."/View/home.php";
    else 
    {
    	$listShop = $pModel->getProductByNumberList($_GET['num']);
    	require_once SITE_ROOT."/View/shop.php";
    }

?>