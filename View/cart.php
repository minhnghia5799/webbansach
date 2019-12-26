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
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">

                
                <div class="col-md-8" style="float:right">
                    <div class="product-content-right">
                        <div class="woocommerce" >
                            <form method="post" action="?page=checkout">
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                            <th class="product-remove">&nbsp;</th>
                                            <th class="product-thumbnail">&nbsp;</th>
                                            <th class="product-name">Tên sách</th>
                                            <th class="product-price">Giá</th>
                                            <th class="product-quantity">Số lượng</th>
                                            <th class="product-subtotal">Tổng cộng</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php  
                                        require_once SITE_ROOT."/Dao/OrderContentDao.php";
                                        require_once SITE_ROOT."/Dao/ProductsDao.php";

                                        $ocDao = new OrderContentDao();
                                        $pDao = new ProductsDao();
                                        $total = 0;

                                        $list = $ocDao->getOrderContentByUserName($_SESSION['username']);
                                        for ($i = 0; $i < Count($list); $i++)
                                        {
                                            if ($list[$i]->getAmount() != 0)
                                            {
                                                $p = $pDao->getProductById($list[$i]->getProductId());
                                    ?>

                                        <tr class="cart_item">
                                            <td class="product-remove">
                                                <a title="Remove this item" class="remove" href="?page=order&remove=<?php echo $list[$i]->getProductId(); ?>">×</a> 
                                            </td>

                                            <td class="product-thumbnail">
                                                <img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="<?php echo $p->getImageLink(); ?>">
                                            </td>

                                            <td class="product-name">
                                                <?php echo $p->getName(); ?>
                                            </td>

                                            <td class="product-price">
                                                <span class="amount"><?php echo $p->getSale(); ?> VNĐ</span> 
                                            </td>

                                            <td class="product-quantity">
                                                <div class="quantity buttons_added">
                                                    
                                                    <input type="number" size="4" class="input-text qty text" title="Qty" value="<?php echo $list[$i]->getAmount(); ?>" min="1" max="100" step="1" disabled>
                                                    
                                                </div>
                                            </td>

                                            <td class="product-subtotal">
                                                <span class="amount"><?php echo $p->getSale() * $list[$i]->getAmount(); ?> VNĐ</span> 
                                            </td>

                                            <?php $total = $p->getSale() * $list[$i]->getAmount(); ?>
                                        </tr>

                                    <?php
                                            }
                                        }
                                    ?>

                                        <tr>
                                            <td class="actions" colspan="6">
                                                <input type="submit" value="Thanh toán" name="proceed" class="checkout-button button alt wc-forward">
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </form>

                            <div class="cart-collaterals">


                            

                            <div class="cart_totals col md-8">
                                <h2>Tổng cộng</h2>

                                <table cellspacing="0">
                                    <tbody>
                                        <tr class="cart-subtotal">
                                            <th>Tổng tiền giỏ hàng</th>
                                            <td><span class="amount"><?php echo $total; ?> VNĐ</span></td>
                                        </tr>

                                        <tr class="shipping">
                                            <th>Phí vận chuyển</th>
                                            <td>Miễn phí vận chuyển</td>
                                        </tr>

                                        <tr class="order-total">
                                            <th>Tổng tiền đơn hàng</th>
                                            <td><strong><span class="amount"><?php echo $total; ?> VNĐ</span></strong> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                            


                            </div>
                        </div>                        
                    </div>                    
                </div>
            </div>
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