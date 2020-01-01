<!--
=========================================================
 Paper Dashboard 2 - v2.0.0
=========================================================

 Product Page: https://www.creative-tim.com/product/paper-dashboard-2
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/paper-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="View/Resource/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="View/Resource/img/logotab.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Admin Libro
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="View/Resource/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="View/Resource/assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="View/Resource/assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="?page=home" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="View/Resource/img/logo.png">
          </div>
        </a>
        <a href="?page=home" class="simple-text logo-normal">
        LIBRO BOOKSTORE
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
        
        <li style="display:none">
            <a href="./chitietdonhang.php">
              <i class="nc-icon nc-single-02"></i>
              <p>Chi tiết đơn hàng</p>
            </a>
          </li>
          <li >
            <a href="?page=admin&dashboard=quanlysach">
              <i class="nc-icon nc-tile-56"></i>
              <p>Quản lý sách</p>
            </a>
          </li>
          <li >
            <a href="?page=admin&dashboard=quanlyloaisach">
              <i class="nc-icon nc-tile-56"></i>
              <p>Quản lý loại sách</p>
            </a>
          </li>
          <li class="active">
            <a  href="?page=admin&dashboard=quanlydonhang">
              <i class="nc-icon nc-tile-56"></i>
              <p>Quản lý đơn hàng</p>
            </a>
          </li>
         
          
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      
      <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-sm">


</div> -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"></h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Mã đơn hàng
                      </th>
                      <th>
                        Tài khoản
                      </th>
                      <th>
                        Họ tên
                      </th>
                      <th   >
                        Địa chỉ
                      </th>
                      <th>
                        Số điện thoại
                      </th>
                      <th>
                        Chức năng
                      </th>
                    </thead>
                   <tbody>
                   <?php
                      require_once SITE_ROOT."/Dao/ShippingInfoDao.php";
                      require_once SITE_ROOT."/Dao/UsersDao.php";
                      $list = new ShippingInfoDao();
                      $list2 = new UsersDao();
                      $list3 = $list->getAllShippingInfo();
                      for($i=0; $i<Count($list3); $i++)
                      {
                        $us = $list2->getUserByUserName($list3[$i]->getUserName());
                        ?>
                        <tr>
                          <td><?php echo $list3[$i]->getId(); ?></td>
                          <td><?php echo $list3[$i]->getUserName(); ?></td>
                          <td><?php echo $us->getName(); ?></td>
                          <td><?php echo $us->getAddress(); ?></td>
                          <td><?php echo $us->getPhoneNumber(); ?></td>
                          <td><a href="?page=admin&dashboard=chitietdonhang&id=<?php echo $list3[$i]->getId(); ?>"><input type="button" name="xemchitiet" value="Xem chi tiết" ></a> <a><input type="button" name="huydonhang" value="Hủy đơn hàng"></a> <a href=""><input type="button" name="thanhcong" value="Thành công"></a></td>
                        </tr>
                        <?php
                      }
                   ?>
                   </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li>
                  <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>
                </li>
                <li>
                  <a href="http://blog.creative-tim.com/" target="_blank">Blog</a>
                </li>
                <li>
                  <a href="https://www.creative-tim.com/license" target="_blank">Licenses</a>
                </li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="View/Resource/assets/js/core/jquery.min.js"></script>
  <script src="View/Resource/assets/js/core/popper.min.js"></script>
  <script src="View/Resource/assets/js/core/bootstrap.min.js"></script>
  <script src="View/Resource/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="View/Resource/assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="View/Resource/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="View/Resource/assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="View/Resource/assets/demo/demo.js"></script>
</body>

</html>
