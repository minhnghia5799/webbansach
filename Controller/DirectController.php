<?php

    if (isset($_GET['page']))
    {
        if ($_GET['page'] == 'shop') require_once SITE_ROOT.'/Controller/ShopController.php';
        else if ($_GET['page'] == 'single-product') require_once SITE_ROOT.'/Controller/SingleProductController.php';
        else if ($_GET['page'] == 'cart') require_once SITE_ROOT.'/Controller/CartController.php';
        else if ($_GET['page'] == 'contact') require_once SITE_ROOT.'/Controller/ContactController.php';
        else if ($_GET['page'] == 'home') require_once SITE_ROOT.'/Controller/ShopController.php';
        else require_once SITE_ROOT.'/View/error.html';
    }
    else require_once SITE_ROOT.'/View/error.html';
?>