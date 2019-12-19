<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">
  <head>
    <?php
        require_once SITE_ROOT."/View/Layout/loaded_css.php";
    ?>
  </head>
  <body>
   
    <?php
        require_once SITE_ROOT."/View/Layout/header.php";
    ?>
    
    <?php
        require_once SITE_ROOT."/View/Layout/logo.php";
    ?>
    
    <?php
        require_once SITE_ROOT."/View/Layout/navbar.php";
    ?>
   

</select>
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
  
    <div  style="margin:40px 0px 0px 60px">
      <input type="text" placeholder="Tên sách">
      <input type="submit" value="Search">
    </div>
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">

                <?php

                    for ($i = 0; $i < count($listShop); $i++)
                    {

                ?>
                            
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product" style="border: 5px groove; border-radius: 10px; text-align: center; vertical-align: middle; padding-top: 20px; padding-bottom: 20px; padding-left: 10px; padding-right: 10px; max-width:300px; min-height: 390px;">
                        <a href="?page=single-product&id=<?php echo $listShop[$i]->getId(); ?>">
                            <div class="product-upper">
                                <img src="<?php echo $listShop[$i]->getImageLink(); ?>" alt="" style="max-height: 200px; max-width: 200px;">
                            </div>
                            <h2><font size="3.5"><b><?php echo $listShop[$i]->getName(); ?></b></font></h2>
                        </a>
                        <div class="product-carousel-price">
                            <ins><?php echo $listShop[$i]->getSale(); ?> VNĐ</ins> <del><?php echo $listShop[$i]->getPrice(); ?> VNĐ</del>
                        </div>                  
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="" style="pointer-events: none; cursor: default;" >Thêm vào giỏ hàng</a>
                        </div>                       
                    </div>
                </div>        
                    
                <?php 

                    }

                ?>

            </div>

            <?php
                require_once SITE_ROOT."/View/Layout/NumListShop.php";
            ?>
            
            
        </div>
    </div>


    <?php
        require_once SITE_ROOT."/View/Layout/footer.php";
    ?>
   
    <?php
        require_once SITE_ROOT."/View/Layout/loaded_js.php";
    ?>
  </body>
</html>