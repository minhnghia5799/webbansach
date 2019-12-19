<?php

    if (!isset($_GET['page'])) require_once SITE_ROOT."/View/error.html";
    // else if (!isset($_POST['username']) && !isset($_POST['username']))
    // {

    // } 
    else if ($_GET['page'] == 'login') require_once SITE_ROOT."/View/login.php";
    else require_once SITE_ROOT."/View/signup.php";

?>