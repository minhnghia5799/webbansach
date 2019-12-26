<div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="?page=home"><img src="View/Resource/img/logo.png" style="width:240px;"></a></h1>
                    </div>
                </div>
                
                <?php 
                    if (isset($_SESSION['username']))
                    {
                        require_once SITE_ROOT."/Dao/OrderContentDao.php";
                        $ocDao = new OrderContentDao();
                        $list = $ocDao->getOrderContentByUserName($_SESSION['username']);
                        $num = 0;
                        for ($i = 0; $i < Count($list); $i++)
                        {
                            if ($list[$i]->getAmount() != 0) $num++;
                        } 
                ?>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="?page=order">Giỏ hàng<i class="fa fa-shopping-cart"></i> <span class="product-count"><?php echo $num; ?></span></a>
                    </div>
                </div>

                    <?php } ?>

            </div>
        </div>
    </div> <!-- End site branding area -->