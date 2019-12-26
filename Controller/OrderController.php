<?php

    require_once SITE_ROOT."/Dao/OrderContentDao.php";
    require_once SITE_ROOT."/Entity/OrderContent.php";

    $odDao = new OrderContentDao();

    if (isset($_SESSION['username']))
    {
        if (isset($_GET['add']))
        {
            $tmp = $odDao->getOneOrderContent($_SESSION['username'], $_GET['add']);
            $odDao->updateOrderContent(new OrderContent($_SESSION['username'], $_GET['add'], $tmp->getAmount() + $_POST['quantity']));
            header("Location: ?page=order");
        }
        else if (isset($_GET['update']))
        {
            $tmp = $odDao->getOneOrderContent($_SESSION['username'], $_GET['update']);
            $odDao->updateOrderContent(new OrderContent($_SESSION['username'], $_GET['update'], $tmp->getAmount() + 1));
            header("Location: ?page=order");
        }
        else if (isset($_GET['remove']))
        {
            $tmp = $odDao->getOneOrderContent($_SESSION['username'], $_GET['remove']);
            $odDao->updateOrderContent(new OrderContent($_SESSION['username'], $_GET['remove'], 0));
            header("Location: ?page=order");
        }
        else require_once SITE_ROOT."/View/cart.php";
    }
    else header("Location: ?page=login");


?>