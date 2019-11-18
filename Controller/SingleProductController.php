<?php

	require_once SITE_ROOT."/Model/ProductModel.php";	
	require_once SITE_ROOT."/Services/ShopServices.php";


	$pModel = new ProductModel();
	$sServices = new ShopServices();

    if (!isset($_GET['page']) || !isset($_GET['id'])) require_once SITE_ROOT."/View/error.html";
    else
    {
    	$p = $sServices->getProductById($_GET['id']);
        $sServices->updateViewedAmountProduct($p->getViewedAmount()+1, $p->getId());
        $cate = $sServices->getNameById($p->getCategory());
    	require_once SITE_ROOT."/View/single-product.php";	
    } 

?>