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
    
  
            <!-- <b>Loại sách</b>
            <select style="text-align:center" name=”loaisach” type="drop-down">
            <option >Tất cả</option>
            <option >Sách giáo khoa</option>
            <option >Sách khoa học</option>
            <option >Sách kinh doanh</option>
            <option >Sách chính trị</option>
            <option >Sách văn học</option>
            <option >Truyện ngôn tình</option>
            <option >Truyện thiếu nhi</option>
            <option >Truyện tranh</option>
            <option >Truyện ngôn tình</option>
            <option >Truyện trinh thám</option>
            <option >Tiểu thuyết</option>
            </div>

       <div class="box">
      <div class="container-1">
          <span class="icon"><i class="fa fa-search"></i></span>
          <input type="search" id="search" placeholder="Tên sách" />
      </div>
    </div>
    <button>Tìm kiếm </button> -->

    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">

                <?php

                    for ($i = 0; $i < count($listShop); $i++)
                    {

                ?>
                            
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <a href="?page=single-product&id=<?php echo $listShop[$i]->getId(); ?>">
                            <div class="product-upper">
                                <img src="<?php echo $listShop[$i]->getImageLink(); ?>" alt="">
                            </div>
                            <h2><?php echo $listShop[$i]->getName(); ?></h2>
                        </a>
                        <div class="product-carousel-price">
                            <ins><?php echo $listShop[$i]->getSale(); ?></ins> <del><?php echo $listShop[$i]->getPrice(); ?></del>
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