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
    
    <?php
        //echo $_SESSION["dk"];
        if (isset($_SESSION['dk']))
        {
            if ($_SESSION["dk"] === "true") 
            {
                echo "<script> alert('Đăng ký thành công'); </script>";
                $_SESSION["dk"] = "false";
            }
        }
        else if (isset($_SESSION['dn']))
        {
            if ($_SESSION["dn"] === "true") 
            {
                echo "<script> alert('Đăng nhập thành công'); </script>";
                $_SESSION["dn"] = "false";
            }
        }
    ?>
    
    <div class="slider-area">
        	<!-- Slider -->
			<div class="block-slider block-slider4">
				<ul class="" id="bxslider-home4">

					<li>
						<img src="<?php echo $list10[0]->getImageLink(); ?>" alt="Slide" style="max-width: 450px; max-height: 450px; margin-left: 200px;">
						<div class="caption-group">
							<h2 class="caption title">
								PHÍA SAU <span class="primary">NGHI <strong>CAN</strong></span>
							</h2>
							<h4 class="caption subtitle">Sách hot nhất tháng</h4>
							<a class="caption button-radius" href="?page=shop&num=1"><span class="icon"></span>Mua ngay</a>
						</div>
					</li>

					<li><img src="<?php echo $list10[8]->getImageLink(); ?>" alt="Slide" style="max-width: 450px; max-height: 450px; margin-left: 50px;">
						<div class="caption-group" style="right: 10%;">
							<h2 class="caption title">
								THẤT TỊCH KHÔNG MƯA <span class="primary">giảm giá <strong>50%</strong></span>
							</h2>
							<h4 class="caption subtitle">Chuyện ngôn tình mới nhất</h4>
							<a class="caption button-radius" href="?page=shop&num=1"><span class="icon"></span>Mua ngay</a>
						</div>
					</li>

					<li><img src="<?php echo $list3V[0]->getImageLink(); ?>" alt="Slide" style="max-width: 450px; max-height: 450px; margin-left: 140px;">
						<div class="caption-group" style="right:20%;">
							<h2 class="caption title">
								<span class="primary"><strong><?php echo $list3V[0]->getName(); ?></strong></span>
							</h2>
							<h4 class="caption subtitle">Sách được xem nhiều nhất tuần</h4>
							<a class="caption button-radius" href="?page=shop&num=1"><span class="icon"></span>Mua ngay</a>
						</div>
					</li>

					<li><img src="<?php echo $list3S[0]->getImageLink(); ?>" alt="Slide" style="max-width: 450px; max-height: 450px; margin-left: 140px;">
						<div class="caption-group" style="right:20%;">
						  <h2 class="caption title">
								<span class="primary"><strong><?php echo $list3S[0]->getName(); ?></strong></span>
							</h2>
							<h4 class="caption subtitle">Sách bán chạy nhất tuần</h4>
							<a class="caption button-radius" href="?page=shop&num=1"><span class="icon"></span>Mua ngay</a>
						</div>
					</li>

				</ul>
			</div>
			<!-- ./Slider -->
    </div> <!-- End slider area -->
    
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>Đổi trả trong ngày</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Giao hàng miễn phí</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Thanh toán an toàn</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>Có nhiều quà tặng</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Sách mới nhất</h2>
                        <div class="product-carousel">

                            <?php 
                                for($i = 0; $i < count($list10); $i++)
                                {
                            ?>

                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="<?php echo $list10[$i]->getImageLink(); ?>" alt="">
                                    <div class="product-hover">
                                        <a href="?page=order&update=<?php echo $list10[$i]->getId(); ?>" class="add-to-cart-link"><i class="fa fa-shopping-cart" ></i> Thêm vào giỏ</a>
                                        <a href="?page=single-product&id=<?php echo $list10[$i]->getId(); ?>" class="view-details-link"><i class="fa fa-link"></i> Xem chi tiết</a>
                                    </div>
                                </div>
                                
                                <h2><a href="?page=single-product&id=<?php echo $list10[$i]->getId(); ?>"><?php echo $list10[$i]->getName(); ?></a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins><?php echo $list10[$i]->getSale(); ?> VNĐ</ins> <del><?php echo $list10[$i]->getPrice(); ?> VNĐ</del>
                                </div> 
                            </div>

                            <?php
                                }
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
    
    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list">
                            <img src="View/Resource/img_brand/no1.png" alt="">
                            <img src="View/Resource/img_brand/no2.png" alt="">
                            <img src="View/Resource/img_brand/no3.png" alt="">
                            <img src="View/Resource/img_brand/no4.png" alt="">
                            <img src="View/Resource/img_brand/no5.png" alt="">
                            <img src="View/Resource/img_brand/no6.png" alt="">
                            <img src="View/Resource/img_brand/no7.png" alt="">
                            <img src="View/Resource/img_brand/no8.png" alt="">                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->
    
    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Bán chạy nhất</h2>
                        <a href="?page=shop&num=1" class="wid-view-more">Xem thêm</a>

                        <?php 
                            for ($i = 0; $i < 3; $i++)
                            {
                        ?>

                        <div class="single-wid-product">
                            <a href="?page=single-product&id=<?php echo $list3S[$i]->getId(); ?>"><img src="<?php echo $list3S[$i]->getImageLink(); ?>" alt="" class="product-thumb"></a>
                            <h2><a href="?page=single-product&id=<?php echo $list3S[$i]->getId(); ?>"><?php echo $list3S[$i]->getName(); ?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins><?php echo $list3S[$i]->getSale(); ?> VNĐ</ins> <del><?php echo $list3S[$i]->getPrice(); ?> VNĐ</del>
                            </div>                            
                        </div>

                    <?php 
                        } 
                    ?>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Xem nhiều nhất</h2>
                        <a href="?page=shop&num=1" class="wid-view-more">Xem thêm</a>

                        <?php 
                            for ($i = 0; $i < 3; $i++)
                            {
                        ?>

                        <div class="single-wid-product">
                            <a href="?page=single-product&id=<?php echo $list3V[$i]->getId(); ?>"><img src="<?php echo $list3V[$i]->getImageLink(); ?>" alt="" class="product-thumb"></a>
                            <h2><a href="?page=single-product&id=<?php echo $list3V[$i]->getId(); ?>"><?php echo $list3V[$i]->getName(); ?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins><?php echo $list3V[$i]->getSale(); ?> VNĐ</ins> <del><?php echo $list3V[$i]->getPrice(); ?> VNĐ</del>
                            </div>                            
                        </div>

                    <?php 
                        } 
                    ?>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Sách mới nhất</h2>
                        <a href="?page=shop&num=1" class="wid-view-more">Xem thêm</a>

                        <?php 
                            for ($i = 0; $i < 3; $i++)
                            {
                        ?>

                        <div class="single-wid-product">
                            <a href="?page=single-product&id=<?php echo $list3N[$i]->getId(); ?>"><img src="<?php echo $list3N[$i]->getImageLink(); ?>" alt="" class="product-thumb"></a>
                            <h2><a href="?page=single-product&id=<?php echo $list3N[$i]->getId(); ?>"><?php echo $list3N[$i]->getName(); ?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins><?php echo $list3N[$i]->getSale(); ?> VNĐ</ins> <del><?php echo $list3N[$i]->getPrice(); ?> VNĐ</del>
                            </div>                            
                        </div>

                    <?php 
                        } 
                    ?>

                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End product widget area -->
    
    <?php
        require_once SITE_ROOT."/View/Layout/footer.php";
    ?>
   
    <?php
        require_once SITE_ROOT."/View/Layout/loaded_js.php";
    ?>
  </body>
</html>