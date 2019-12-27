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
        else if ($_GET['page'] == 'checkout') 
        {
            if (isset($_GET['finish']))
            {
                // Update user
                require_once SITE_ROOT."/Dao/UsersDao.php";
                $uDao = new UsersDao();
                $user = $uDao->getUserByUserName($_SESSION['username']);
                $user->setName($_POST['name']);
                $user->setAddress($_POST['address']);
                $user->setProvince($_POST['province']);
                $user->setEmail($_POST['email']);
                $user->setPhoneNumber($_POST['phoneNumber']);
                $uDao->updateUsers($user);

                // Add shipping Info
                require_once SITE_ROOT."/Dao/ShippingInfoDao.php";
                require_once SITE_ROOT."/Entity/ShippingInfo.php";
                $siDao = new ShippingInfoDao();
                $idShip = mt_rand(100000, 1000000000);
                $siDao->insertShippingInfo(new ShippingInfo($idShip, $_SESSION['username'], "Chờ xử lý"));

                // Add shipping Info Content
                require_once SITE_ROOT."/Dao/ShippingInfocontentDao.php";
                require_once SITE_ROOT."/Dao/OrderContentDao.php";
                require_once SITE_ROOT."/Entity/ShippingInfocontent.php";
                $sicDao = new ShippingInfocontentDao();
                $pDao = new OrderContentDao();
                $list = $pDao->getOrderContentByUserName($_SESSION['username']);

                for ($i = 0; $i < Count($list); $i++)
                {
                    if ($list[$i]->getAmount() != 0) $sicDao->insertShippingInfocontent(new ShippingInfoContent($idShip, $list[$i]->getProductId(), $list[$i]->getAmount()));
                }

                // Remove
                $list = $pDao->getOrderContentByUserName($_SESSION['username']);
                for ($i = 0; $i < Count($list); $i++)
                {
                    $list[$i]->setAmount(0);
                    $pDao->updateOrderContent($list[$i]);
                }

                echo "<script> alert('Đã thanh toán thành công!'); </script>";
                header("Location: ?page=home");
            }
            else require_once SITE_ROOT.'/View/checkout.php';
        }
        else if ($_GET['page'] == 'admin') require_once SITE_ROOT."/Controller/AdminController.php";
        else require_once SITE_ROOT.'/View/error.html';
    }
    else require_once SITE_ROOT.'/View/error.html';
?>