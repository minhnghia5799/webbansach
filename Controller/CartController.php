<?php

    if (!isset($_GET['checkout'])) require_once SITE_ROOT."/View/cart.php";
    else if ($_GET['checkout'] == "true") require_once SITE_ROOT."/View/checkout.php";
    else require_once SITE_ROOT."/View/error.html";

?>