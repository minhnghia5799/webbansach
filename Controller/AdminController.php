<?php

    if ($_GET['dashboard'] == 'quanlysach') require_once SITE_ROOT."/View/admin/quanlysach.php";
    else if ($_GET['dashboard'] == 'quanlydonhang') require_once SITE_ROOT."/View/admin/quanlydonhang.php";
    else if ($_GET['dashboard'] == 'chitietdonhang') require_once SITE_ROOT."/View/admin/user.php";

?>