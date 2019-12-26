<?php

    require_once SITE_ROOT."/Services/OrderServices.php";
    $sSer = new OrderServices();

    if (!isset($_GET['page'])) require_once SITE_ROOT."/View/error.html";
    else if (isset($_POST['un']) && isset($_POST['pw']) && isset($_POST['rpw']))
    {
        $dem = 0;
        $list = $sSer->getAllUsers();
        for ($i=0; $i<count($list); $i++)
        {
            if ($list[$i]->getUserName() === $_POST['un']) 
            {
                $dem++;
                require_once SITE_ROOT."/View/signup.php";
                echo "<script> alert('Tài khoản này đã có người sử dụng'); </script>";
            }
        }
        if($dem==0)
        {
            $sSer->insertUsers2($_POST['un'],$_POST['pw']);
            $_SESSION['dk'] = "true";
            header("Location: ?page=home");
        }
    } 
    else if ($_GET['page'] == 'login') require_once SITE_ROOT."/View/login.php";
    else require_once SITE_ROOT."/View/signup.php";

?>