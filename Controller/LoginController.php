<?php

    require_once SITE_ROOT."/Services/OrderServices.php";
    $sSer = new OrderServices();

    if (!isset($_GET['page'])) require_once SITE_ROOT."/View/error.html";
    else if (isset($_POST['un']) && isset($_POST['pw']) && isset($_POST['rpw']))
    {
        $list = $sSer->getAllUsers();
        for ($i=0; $i<count($list); $i++)
        {
            if ($list[$i]->getUserName() === $_POST['un']) echo "Tai khoan da co ng dung";
        }
    } 
    else if ($_GET['page'] == 'login') require_once SITE_ROOT."/View/login.php";
    else require_once SITE_ROOT."/View/signup.php";

?>