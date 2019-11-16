<div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2><span>LIBRO</span></h2>
                        <p>Cửa hàng bán sách của Nguyễn Đặng Minh Nghĩa và đồng bọn :)))</p>
                        <div class="footer-social">
                            <a href="https://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/?lang=vi" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="https://youtube.com" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Điều hướng </h2>
                        <ul>
                        <li class="<?php if(!isset($_GET['page']))if($_GET['page']=='home') echo 'active' ?>"><a href="?page=home">Trang chủ</a></li>
                        <li class="<?php if(isset($_GET['page']))if($_GET['page']=='shop') echo 'active' ?>"><a href="?page=shop" >Cửa hàng</a></li>
                        <li class="<?php if(isset($_GET['page']))if($_GET['page']=='cart') echo 'active' ?>"><a href="?page=cart">Giỏ hàng</a></li>
                        <li class="<?php if(isset($_GET['page']))if($_GET['page']=='contact') echo 'active' ?>"><a href="?page=contact">Liên hệ</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Danh mục</h2>
                        <ul>
                            <!-- mày phải dùng php để load table danh mục lên đây -->
                            <li><a href="">Truyện tranh thiếu nhi</a></li>
                            <li><a href="">Văn học Việt Nam</a></li>
                            <li><a href="">Văn học nước ngoài</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Tin tức mới</h2>
                        <p>Đăng ký nhận những tin tức của chúng tôi và nhận các ưu đãi độc quyền mà bạn sẽ không tìm thấy bất cứ nơi nào khác!</p>
                        <div class="newsletter-form">
                            <form action="">
                                <input type="email" placeholder="Nhập email của bạn">
                                <input type="submit" value="Đăng ký" style="pointer-events: none; cursor: default;">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p style="display:none"> &copy; 2015 uCommerce. All Rights Reserved. <a href="http://www.freshdesignweb.com" target="_blank">freshDesignweb.com</a></p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->