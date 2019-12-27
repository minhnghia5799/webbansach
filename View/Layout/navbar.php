﻿<div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="<?php if(isset($_GET['page']))if($_GET['page']=='home')echo 'active' ?>"><a href="?page=home">Trang chủ</a></li>
                        <li class="<?php if(isset($_GET['page']))if($_GET['page']=='shop')echo 'active' ?>"><a href="?page=shop&num=1" >Cửa hàng</a></li>
                        <li style="pointer-events: none; cursor: default; display: none"><a href="?page=shop&cate=1">Danh mục</a></li>
                        <li class="<?php if(isset($_GET['page']))if($_GET['page']=='single-product')echo 'active' ?>" style="pointer-events:; cursor: default; display: none"><a href="?page=single-product&sp=1">Sản phẩm</a></li>
                        <li class="<?php if(isset($_GET['page']))if($_GET['page']=='order')echo 'active' ?>" style="pointer-events:; cursor: default;"><a href="?page=order">Giỏ hàng</a></li>
                        <li class="<?php if(isset($_GET['page']))if($_GET['page']=='contact')echo 'active' ?>" style="pointer-events:; cursor: default;"><a href="?page=contact">Liên hệ</a></li>
                        <?php if (isset($_SESSION['username'])) if ($_SESSION['username'] === 'admin') { ?>
                        <li class="<?php if(isset($_GET['page']))if($_GET['page']=='quanlysach')echo 'active' ?>" style="pointer-events:; cursor: default;"><a href="?page=admin&dashboard=quanlysach">Quản lý</a></li>
                        <?php } ?>
                    </ul>
                </div>  
            </div>
        </div>
    </div> 
<br>
    <!-- End mainmenu area -->