<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once SITE_ROOT."/View/Layout/loaded_css_login.php"; ?>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" action="?page=login" method="post">
					<span class="login100-form-title">
						Đăng Nhập
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Bạn chưa nhập tài khoản">
						<input class="input100" type="text" name="username" placeholder="Tên tài khoản">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Bạn chưa nhập mật khẩu">
						<input class="input100" type="password" name="password" placeholder="Mật khẩu">
						<span class="focus-input100"></span>
					</div>

					<div class="text-right p-t-13 p-b-23">
						<span class="txt1">
							Quên
						</span>

						<a href="?page=forgot" class="txt2">
							mật khẩu?
						</a>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Đăng nhập
						</button>
					</div>

					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							Bạn chưa có tài khoản?
						</span>

						<a href="?page=signup" class="txt3">
							Đăng ký ngay
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
<?php include_once SITE_ROOT."/View/Layout/loaded_js_login.php"; ?>

</body>
</html>