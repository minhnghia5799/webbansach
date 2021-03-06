<?php

    require_once SITE_ROOT."/Services/OrderServices.php";
    require_once SITE_ROOT."/Services/ShopServices.php";
    require_once SITE_ROOT."/Dao/OrdersDao.php";
    require_once SITE_ROOT."/Entity/Orders.php";
    require_once SITE_ROOT."/Dao/OrderContentDao.php";
    require_once SITE_ROOT."/Entity/OrderContent.php";

    $sSer = new OrderServices();
    $shopSer = new ShopServices();
    $oDao = new OrdersDao();
    $odDao = new OrderContentDao();

    if (!isset($_GET['page'])) require_once SITE_ROOT."/View/error.html";
    // Đăng xuất
    else if (isset($_GET['logout'])) 
    {
        $oDao->updateOrders($_SESSION['username'], 0);
        $list = $odDao->getOrderContentByUserName($_SESSION['username']);
        for ($i = 0; $i < Count($list); $i++)
        {
            $list[$i]->setAmount(0);
            $odDao->updateOrderContent($list[$i]);
        } 
        unset($_SESSION['username']);
        header("Location: ?page=home");
    }
    // Đăng ký
    else if (isset($_POST['un']) && isset($_POST['pw']) && isset($_POST['rpw']))
    {
        $dem = 0;
        $list = $sSer->getAllUsers();
        if ($_POST['pw'] != $_POST['rpw'])
        {
            require_once SITE_ROOT."/View/signup.php";
            echo "<script> alert('Mật khẩu chưa khớp nhau'); </script>";
        }
        else 
        {
            for ($i=0; $i<count($list); $i++)
            {
                if ($list[$i]->getUserName() === $_POST['un']) 
                {
                    $dem++;
                    require_once SITE_ROOT."/View/signup.php";
                    echo "<script> alert('Tài khoản này đã có người sử dụng, vui lòng đăng ký một tài khoản khác'); </script>";
                }
            }
            if($dem==0)
            {
                $passs = md5($_POST['pw'], false);
                $sSer->insertUsers2($_POST['un'], $passs);
                $oDao->insertOrders(new Orders($_POST['un'], 0));
                $list = $shopSer->getAllProducts();
                for ($i = 0; $i < Count($list); $i++)
                {
                    $odDao->insertOrderContent(new OrderContent($_POST['un'], $list[$i]->getId(), 0));
                }
                $_SESSION['dk'] = "true";
                header("Location: ?page=home");
            }
        }
        
    } 
    // Đăng nhập
    else if ($_GET['page'] == 'login' && isset($_POST['username']) && isset($_POST['password'])) {
        $list = $sSer->getAllUsers();
        for ($i=0; $i<count($list); $i++)
        {
            if ($list[$i]->getUserName() === $_POST['username'] && $list[$i]->getPass() === md5($_POST['password'], false)) 
            {
                $_SESSION['dn'] = "true";
                $_SESSION['username'] = $_POST['username'];
                $oDao->updateOrders($_SESSION['username'], 1);
                header('Location: ?page=home');
            }
        }
        require_once SITE_ROOT."/View/login.php";
        echo "<script> alert('Tên tài khoản hoặc mật khẩu không đúng!'); </script>";
    }
    else if ($_GET['page'] == 'login') require_once SITE_ROOT."/View/login.php";
    else require_once SITE_ROOT."/View/signup.php";

?>