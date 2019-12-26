<?php

    $dk = false;
    if (isset($_GET['page']))
    {
        if ($_GET['page'] == 'shop') require_once SITE_ROOT.'/Controller/ShopController.php';
        else if ($_GET['page'] == 'single-product') require_once SITE_ROOT.'/Controller/SingleProductController.php';
        else if ($_GET['page'] == 'order') require_once SITE_ROOT.'/Controller/OrderController.php';
        else if ($_GET['page'] == 'contact') require_once SITE_ROOT.'/Controller/ContactController.php';
        else if ($_GET['page'] == 'home') require_once SITE_ROOT.'/Controller/ShopController.php';
        else if ($_GET['page'] == 'login' || $_GET['page'] == 'signup') require_once SITE_ROOT.'/Controller/LoginController.php';
        else if ($_GET['page'] == 'checkout') require_once SITE_ROOT.'/View/checkout.php';
        else require_once SITE_ROOT.'/View/error.html';
    }
    else require_once SITE_ROOT.'/View/error.html';
?>