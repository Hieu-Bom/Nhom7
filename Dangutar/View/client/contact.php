<?php session_start(); ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>Hi</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="../../Public/client/images/favicon.png">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- StyleSheet -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="../../Public/client/css/bootstrap.css">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="../../Public/client/css/magnific-popup.min.css">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="../../Public/client/css/font-awesome.css">
	<!-- Fancybox -->
	<link rel="stylesheet" href="../../Public/client/css/jquery.fancybox.min.css">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="../../Public/client/css/themify-icons.css">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href="../../Public/client/css/niceselect.css">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="../../Public/client/css/animate.css">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="../../Public/client/css/flex-slider.min.css">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="../../Public/client/css/owl-carousel.css">
	<!-- Slicknav -->
    <link rel="stylesheet" href="../../Public/client/css/slicknav.min.css">
	
	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="../../Public/client/css/reset.css">
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../../Public/client/css/responsive.css">

	
	
</head>
<body class="js">
	
<?php
	$conn = mysqli_connect("localhost","root","","danguitar");
	mysqli_query($conn,"SET danguitar 'utf8'");

	//kết nối đăng nhập
	$sql = "select * from tbl_users";
	$kq = mysqli_query($conn,$sql);
	$num_rows = mysqli_num_rows($kq);
	$rs = mysqli_fetch_array($kq);

	isset($_SESSION['test']);
	$ten=$_SESSION['test'];

    //kết nối menu
    $sql1 = "SELECT * FROM tbl_category";
    $kq1=mysqli_query($conn,$sql1);
    //kết nối cho giỏ hàng
	$sql3 = "SELECT * FROM tbl_giohang where id_users='$ten'";
	$kq3=mysqli_query($conn,$sql3);
	$kq4=mysqli_query($conn,$sql3);
	$dem=0;
	$tong=0;
	$tong1=0;
?>

	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->
	
	
	<!-- Header -->
	<header class="header shop">
		<!-- Topbar -->
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-12 col-12">
						<!-- Top Left -->
						<div class="top-left">
							<ul class="list-main">
								<li><i class="ti-headphone-alt"></i> +84 0702009986</li>
								<li><i class="ti-email"></i> duchieulp@gmail.com</li>
							</ul>
						</div>
						<!--/ End Top Left -->
					</div>
					<div class="col-lg-7 col-md-12 col-12">
						<!-- Top Right -->
						<div class="right-content">
							<ul class="list-main">
								<li><i class="ti-location-pin"></i> Nam Định</li>
								<li><i class="ti-alarm-clock"></i> <a href="#">7AM-10PM</a></li>
								<?php
                                                if (isset($_SESSION['test'])==$rs[0]) {?>
                                                    <li>
                                                            <i class="ti-user" aria-hidden="true"></i>
                                                            <a href="#">
                                                            <?php echo $_SESSION['test'] ?></a>
                                                    </li>
                                                    <li>
                                                            <i class="ti-power-offr" aria-hidden="true"></i>
                                                            <a href="?controller=logout" style="color: #fff">
                                                                <a href="../../Controller/client/logout.php#">Logout</a>
                                                            </a>

                                                    </li>
                                                <?php } else {?>
                                                    <li>
                                                            <i class="ti-power-off" aria-hidden="true"></i>
                                                            <a href="logup.php#">Logup</a>

                                                    </li>
                                                    <li>
                                                            <i class="ti-power-off" aria-hidden="true"></i><a href="login.php#">Login</a>
 
                                                    </li>
                                                <?php }
                                            ?>
</li>
							</ul>
						</div>
						<!-- End Top Right -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Topbar -->
		<div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-12">
						<!-- Logo -->
						<div class="logo">
							<a href="index.php"><img src="../../Public/client/images/logo.png" alt="logo"></a>
						</div>
						<!--/ End Logo -->
						<!-- Search Form -->
						<div class="search-top">
							<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
							<!-- Search Form -->
							<div class="search-top">
								<form class="search-form">
									<input type="text" placeholder="Search here..." name="search">
									<button value="search" type="submit"><i class="ti-search"></i></button>
								</form>
							</div>
							<!--/ End Search Form -->
						</div>
						<!--/ End Search Form -->
						<div class="mobile-nav"></div>
					</div>
					<div class="col-lg-8 col-md-7 col-12">
						<div class="search-bar-top">
							<div class="search-bar">
								<select>
									<option selected="selected">All Category</option>
									<option>watch</option>
									<option>mobile</option>
									<option>kid’s item</option>
								</select>
								<form>
									<input name="search" placeholder="Search Products Here....." type="search">
									<button class="btnn"><i class="ti-search"></i></button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-12">
						<div class="right-bar">
							<!-- Search Form -->
							<div class="sinlge-bar">
								<a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
							</div>
							<div class="sinlge-bar">
								<a href="#" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
							</div>
							<div class="sinlge-bar shopping">
								<a href="#" class="single-icon"><i class="ti-bag"></i> <span class="total-count">2</span></a>
								<!-- Shopping Item -->
								<div class="shopping-item">
									<div class="dropdown-cart-header">
										<span>2 Items</span>
										<a href="#">View Cart</a>
									</div>
									<ul class="shopping-list">

        									<?php
		        								while(($row3 = mysqli_fetch_array($kq3)))
		        								{
		        								?>
		        									<li>
		        										<a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
		        										<a class="cart-img" href="#"><img src="../../<?php echo $row3['anh'];?>" alt="#"></a>
		        										<h4><a href="#"><?php echo $row3['name']; ?></a></h4>
		        										<p class="quantity"><?php echo $row3['soluong']; ?> - <span class="amount"><?= number_format($row3['dongia'], 0, ",", ".") ?> đ</span></p>
		        										<?php $tong=$tong+ $row3['dongia']*$row3['soluong']; ?>
		        										
		        									</li>
        									<?php           
	        								}
	        								?>
        								</ul>
        								<div class="bottom">
        									<div class="total">
        										<span>Total</span>
        										<span class="total-amount"><?= number_format($tong, 0, ",", ".") ?> đ</span>
        									</div>
        									<a href="checkout.php?tongtt=<?php echo $tong+100000; ?>" class="btn animate">Checkout</a>
        								</div>
								</div>
								<!--/ End Shopping Item -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Inner -->
		<div class="header-inner">
			<div class="container">
				<div class="cat-nav-head">
					<div class="row">
						<div class="col-lg-9 col-12">
							<div class="menu-area">
								<!-- Main Menu -->
								<nav class="navbar navbar-expand-lg">
									<div class="navbar-collapse">	
										<div class="nav-inner">	
											<ul class="nav main-menu menu navbar-nav">
													<li class="active"><a href="index.php#">Home</a></li>
													<li><a href="#">Shop<i class="ti-angle-down"></i><span class="new">New</span></a>
														<ul class="dropdown">
															<li><a href="cart.php">Cart</a></li>
															<li><a href="checkout.php?tongtt=<?php echo $tong+100000; ?>">Checkout</a></li>
														</ul>
													</li>
													<li><a href="#">Blog<i class="ti-angle-down"></i></a>
														<ul class="dropdown">
															<li><a href="blog-single-sidebar.php">Blog Single Sidebar</a></li>
														</ul>
													</li>
													<li><a href="contact.php">Contact Us</a></li>
												</ul>
										</div>
									</div>
								</nav>
			<!--/ End Header Inner -->
		</header>
		<!--/ End Header -->
	
	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="index.php">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="blog-single.php">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->
  
	<!-- Start Contact -->
	<section id="contact-us" class="contact-us section">
		<div class="container">
				<div class="contact-head">
					<div class="row">
						<div class="col-lg-8 col-12">
							<div class="form-main">
								<div class="title">
									<h4>Get in touch</h4>
									<h3>Write us a message</h3>
								</div>
								<form class="form" method="post" action="mail/mail.php">
									<div class="row">
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Your Name<span>*</span></label>
												<input name="name" type="text" placeholder="">
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Your Subjects<span>*</span></label>
												<input name="subject" type="text" placeholder="">
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Your Email<span>*</span></label>
												<input name="email" type="email" placeholder="">
											</div>	
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Your Phone<span>*</span></label>
												<input name="company_name" type="text" placeholder="">
											</div>	
										</div>
										<div class="col-12">
											<div class="form-group message">
												<label>your message<span>*</span></label>
												<textarea name="message" placeholder=""></textarea>
											</div>
										</div>
										<div class="col-12">
											<div class="form-group button">
												<button type="submit" class="btn ">Send Message</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="col-lg-4 col-12">
							<div class="single-head">
								<div class="single-info">
									<i class="fa fa-phone"></i>
									<h4 class="title">Call us Now:</h4>
									<ul>
										<li>+123 456-789-1120</li>
										<li>+522 672-452-1120</li>
									</ul>
								</div>
								<div class="single-info">
									<i class="fa fa-envelope-open"></i>
									<h4 class="title">Email:</h4>
									<ul>
										<li><a href="mailto:info@yourwebsite.com">info@yourwebsite.com</a></li>
										<li><a href="mailto:info@yourwebsite.com">support@yourwebsite.com</a></li>
									</ul>
								</div>
								<div class="single-info">
									<i class="fa fa-location-arrow"></i>
									<h4 class="title">Our Address:</h4>
									<ul>
										<li>KA-62/1, Travel Agency, 45 Grand Central Terminal, New York.</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
	<!--/ End Contact -->
	
	<!-- Start Footer Area -->
        <footer class="footer">
        	<!-- Footer Top -->
        	<div class="footer-top section">
        		<div class="container">
        			<div class="row">
        				<div class="col-lg-5 col-md-6 col-12">
        					<!-- Single Widget -->
        					<div class="single-footer about">
        						<div class="logo">
        							<a href="index.php"><img src="images/payments.png" alt=""></a>
        						</div>
        						<p class="text">Dùng thời gian gắn bó để làm thước đo cho việc chọn kích thước đàn phù hợp với bạn. Ví dụ, thời gian và kế hoạch chơi nên được chú ý nhất khi bạn chọn kích thước đàn. Thêm vào đó là thể loại nhạc, môi trường chơi và thể trạng của người chơi. Nếu bạn là người chơi nghiêm túc thì một cây đàn dáng chuẩn là lựa chọn tối ưu. </p>
        						<p class="call">Hãy liên lạc ngay với chúng tôi 24/7<span><a href="tel:123456789"> 0123 456 789</a></span></p>
        					</div>
        					<!-- End Single Widget -->
        				</div>
        				<div class="col-lg-2 col-md-6 col-12">
        					<!-- Single Widget -->
        					<div class="single-footer links">
        						<h4>Thông Tin</h4>
        						<ul>
        							<li><a href="#">Về chúng tôi</a></li>
        							<li><a href="#">Câu hỏi thường gặp</a></li>
        							<li><a href="#">Điều khoản và điều kiện</a></li>
        							<li><a href="#">Liên hệ chúng tôi</a></li>
        							<li><a href="#">Trợ giúp</a></li>
        						</ul>
        					</div>
        					<!-- End Single Widget -->
        				</div>
        				<div class="col-lg-2 col-md-6 col-12">
        					<!-- Single Widget -->
        					<div class="single-footer links">
        						<h4>Dịch Vụ Khách Hàng</h4>
        						<ul>
        							<li><a href="#">Phương thức thanh toán </a></li>
        							<li><a href="#">Hoàn tiền</a></li>
        							<li><a href="#">Lợi nhuận</a></li>
        							<li><a href="#">Đang chuyển hàng</a></li>
        							<li><a href="#">Chính sách bảo mật </a></li>
        						</ul>
        					</div>
        					<!-- End Single Widget -->
        				</div>
        				<div class="col-lg-3 col-md-6 col-12">
        					<!-- Single Widget -->
        					<div class="single-footer social">
        						<h4>THÔNG TIN LIÊN LẠC</h4>
        						<!-- Single Widget -->
        						<div class="contact">
        							<ul>
        								<li>Hoàng Mai , Hà Nội</li>
        								<li>Tầng 5 , UNETI</li>
        								<li>nhom7uneti@shop.com</li>
        								<li>02345678888</li>
        							</ul>
        						</div>
        						<!-- End Single Widget -->
        						<ul>
        							<li><a href="#"><i class="ti-facebook"></i></a></li>
        							<li><a href="#"><i class="ti-twitter"></i></a></li>
        							<li><a href="#"><i class="ti-flickr"></i></a></li>
        							<li><a href="#"><i class="ti-instagram"></i></a></li>
        						</ul>
        					</div>
        					<!-- End Single Widget -->
        				</div>
        			</div>
        		</div>
        	</div>
        	<!-- End Footer Top -->
        	<div class="copyright">
        		<div class="container">
        			<div class="inner">
        				<div class="row">
        					<div class="col-lg-6 col-12">
        						<div class="left">
        							<p>Copyright © 2020 <a href="http://www.wpthemesgrid.com" target="_blank">Wpthemesgrid</a>  - Quản Lý Bán Đàn Nhóm 7 - UNETI.</p>
        						</div>
        					</div>
        					<div class="col-lg-6 col-12">
        						<div class="right">
        							<img src="../../Public/client/images/payments.png" alt="#">
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </footer>
        <!-- /End Footer Area -->
	
	
 
	<!-- Jquery -->
    <script src="../../Public/client/js/jquery.min.js"></script>
    <script src="../../Public/client/js/jquery-migrate-3.0.0.js"></script>
	<script src="../../Public/client/js/jquery-ui.min.js"></script>
	<!-- Popper JS -->
	<script src="../../Public/client/js/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="../../Public/client/js/bootstrap.min.js"></script>
	<!-- Color JS -->
	<script src="../../Public/client/js/colors.js"></script>
	<!-- Slicknav JS -->
	<script src="../../Public/client/js/slicknav.min.js"></script>
	<!-- Owl Carousel JS -->
	<script src="../../Public/client/js/owl-carousel.js"></script>
	<!-- Magnific Popup JS -->
	<script src="../../Public/client/js/magnific-popup.js"></script>
	<!-- Fancybox JS -->
	<script src="../../Public/client/js/facnybox.min.js"></script>
	<!-- Waypoints JS -->
	<script src="../../Public/client/js/waypoints.min.js"></script>
	<!-- Jquery Counterup JS -->
	<script src="../../Public/client/js/jquery-counterup.min.js"></script>
	<!-- Countdown JS -->
	<script src="../../Public/client/js/finalcountdown.min.js"></script>
	<!-- Nice Select JS -->
	<script src="../../Public/client/js/nicesellect.js"></script>
	<!-- Ytplayer JS -->
	<script src="../../Public/client/js/ytplayer.min.js"></script>
	<!-- Flex Slider JS -->
	<script src="../../Public/client/js/flex-slider.js"></script>
	<!-- ScrollUp JS -->
	<script src="../../Public/client/js/scrollup.js"></script>
	<!-- Onepage Nav JS -->
	<script src="../../Public/client/js/onepage-nav.min.js"></script>
	<!-- Easing JS -->
	<script src="../../Public/client/js/easing.js"></script>
	<!-- Google Map JS -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnhgNBg6jrSuqhTeKKEFDWI0_5fZLx0vM"></script>	
	<script src="../../Public/client/js/gmap.min.js"></script>
	<script src="../../Public/client/js/map-script.js"></script>
	<!-- Active JS -->
	<script src="../../Public/client/js/active.js"></script>
	<script src="../../Public/client/js/mua.js"></script>
</body>
</html>
