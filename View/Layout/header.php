<div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                            
                            <!-- riêng thẻ này tao để disabled để phân quyền đăng nhập khi mày làm tới đây -->
                            <!-- <li><a href="#" style="pointer-events: none; cursor: default;"><i class="fa fa-user"></i> Tài khoản của bạn</a></li> -->
                                
                                <!-- <li><a href="#"><i class="fa fa-heart"></i> Wishlist</a></li>
                                <li><a href="cart.html"><i class="fa fa-user"></i> My Cart</a></li>
                                <li><a href="checkout.html"><i class="fa fa-user"></i> Checkout</a></li> -->

                            <li><a href="?page=signup"><i class="fa fa-user"></i> Đăng ký</a></li>
                            <?php 
                                if (!isset($_SESSION['username'])) {
                            ?>
                            <li><a href="?page=login"><i class="fa fa-user"></i> Đăng nhập</a></li>
                                <?php }else{ ?>
                                    <li><a href="?page=login&logout=true"><i class="fa fa-user"></i> Đăng xuất</a></li>
                                    <li> Xin chào <?php echo $_SESSION['username']; ?></li>
                                <?php }?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->