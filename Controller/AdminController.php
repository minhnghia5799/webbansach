<?php

    require_once SITE_ROOT."/Dao/ProductsDao.php";
    require_once SITE_ROOT."/Dao/ShippingInfoDao.php";
    require_once SITE_ROOT."/Dao/ShippingInfocontentDao.php";

    $pDao = new ProductsDao();

    if ($_GET['dashboard'] == 'quanlysach') 
    {
        if (isset($_GET['action']))
        {
            if ($_GET['action'] === 'remove')
            {
                $pDao->deleteProduct($_GET['id']);
                header("Location: ?page=admin&dashboard=quanlysach");
            } 
        }
        else require_once SITE_ROOT."/View/admin/quanlysach.php";
    }
    else if ($_GET['dashboard'] == 'quanlydonhang') 
    {
        if (isset($_GET['action']))
        {
            if ($_GET['action'] === 'remove')
            {

            } 
        }
        else require_once SITE_ROOT."/View/admin/quanlydonhang.php";
    }
    else if ($_GET['dashboard'] == 'quanlyloaisach') require_once SITE_ROOT."/View/admin/quanlyloaisach.php";
    else if ($_GET['dashboard'] == 'chitietdonhang') require_once SITE_ROOT."/View/admin/chitietdonhang.php";

?>