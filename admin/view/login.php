<?php
    session_start();
    include "../../dao/pdo.php";
    include "../../dao/user.php";

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = checkuser($username, $password);
        if(isset($user)&&(is_array($user))&&(count($user)>0)){
            extract($user);
            if($role==1){
                $_SESSION['s_user'] = $user;
                header('location: index.php');
				
            } else {
                $tb = 'Tài khoản này không có quyền đăng nhập trang quản trị!';
            }
        } else {
            $tb = 'Tài khoản này không tồn tại!';
        }
         
    }
?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="../../img/fav2.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Super Sneakers</title>

	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="../../css/linearicons.css">
	<link rel="stylesheet" href="../../css/owl.carousel.css">
	<link rel="stylesheet" href="../../css/themify-icons.css">
	<link rel="stylesheet" href="../../css/font-awesome.min.css">
	<link rel="stylesheet" href="../../css/nice-select.css">
	<link rel="stylesheet" href="../../css/nouislider.min.css">
	<link rel="stylesheet" href="../../css/bootstrap.css">
	<link rel="stylesheet" href="../../css/main.css">
</head>

<body>

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Quản trị viên</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="../../img/login.jpg" alt="">
						<div class="hover">
							<h4>Bạn chưa có tài khoản?</h4>
							<a class="primary-btn" href="index.php?pg=dangky">Đăng ký ngay</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Đăng nhập</h3>
						<h5 style="color:red">
						<?php
							if(isset($tb)&&($tb!="")){
                                echo '<h3 style="color: red">'.$tb.'</h3>';
                            }
						?>
						</h5>
						<form class="row login_form" action="login.php" method="post" >
						<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="username" name="username" placeholder="Tài khoản">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="password" name="password" placeholder="Mật khẩu">
							</div>
							<div class="col-md-12 form-group">
								<input type="submit" value="Đăng nhập" name="login" class="primary-btn"></input>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->

    <script src="../../js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="../../js/vendor/bootstrap.min.js"></script>
	<script src="../../js/jquery.ajaxchimp.min.js"></script>
	<script src="../../js/jquery.nice-select.min.js"></script>
	<script src="../../js/jquery.sticky.js"></script>
	<script src="../../js/nouislider.min.js"></script>
	<script src="../../js/jquery.magnific-popup.min.js"></script>
	<script src="../../js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="../../js/gmaps.min.js"></script>
	<script src="../../js/main.js"></script>
</body>

</html>