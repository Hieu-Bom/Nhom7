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
    <title>Blog.</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="../../Public/client/images/favicon.png">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- StyleSheet -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="../../Public/client/css/bootstrap.css">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="../../client/Public/client/css/magnific-popup.min.css">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="../../client/Public/client/css/font-awesome.css">
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
    <link rel="stylesheet" href="../../Public/client/ss/responsive.css">

	
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
								<li class="active"><a href="blog-single.php">Blog Single Sidebar</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
			
		<!-- Start Blog Single -->
		<section class="blog-single section">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-12">
						<div class="blog-single-main">
							<div class="row">
								<div class="col-12">
									<div class="image">
										<img src="https://via.placeholder.com/950x460" alt="#">
									</div>
									<div class="blog-detail">
										<h2 class="blog-title">What are the secrets to start- up success?</h2>
										<div class="blog-meta">
											<span class="author"><a href="#"><i class="fa fa-user"></i>By Admin</a><a href="#"><i class="fa fa-calendar"></i>Dec 24, 2018</a><a href="#"><i class="fa fa-comments"></i>Comment (15)</a></span>
										</div>
										<div class="content">
											<p>What a crazy time. I have five children in colleghigh school graduates.jpge or pursing post graduate studies  Each of my children attends college far from home, the closest of which is more than 800 miles away. While I miss being with my older children, I know that a college experience can be the source of great growth and experience can be the source of source of great growth and can provide them with even greater in future.</p>
											<blockquote> <i class="fa fa-quote-left"></i> Do what you love to do and give it your very best. Whether it's business or baseball, or the theater, or any field. If you don't love what you're doing and you can't give it your best, get out of it. Life is too short. You'll be an old man before you know it. risus. Ut tincidunt, erat eget feugiat eleifend, eros magna dapibus diam.</blockquote>
											<p>What a crazy time. I have five children in colleghigh school graduates.jpge or pursing post graduate studies  Each of my children attends college far from home, the closest of which is more than 800 miles away. While I miss being with my older children, I know that a college experience can be the source of great growth and experience can be the source of source of great growth and can provide them with even greater in future.</p>
											<p>What a crazy time. I have five children in colleghigh school graduates.jpge or pursing post graduate studies  Each of my children attends college far from home, the closest of which is more than 800 miles away. While I miss being with my older children, I know that a college experience can be the source of great growth and experience can be the source of source of great growth and can provide them with even greater in future.</p>
										</div>
									</div>
									<div class="share-social">
										<div class="row">
											<div class="col-12">
												<div class="content-tags">
													<h4>Tags:</h4>
													<ul class="tag-inner">
														<li><a href="#">Glass</a></li>
														<li><a href="#">Pant</a></li>
														<li><a href="#">t-shirt</a></li>
														<li><a href="#">swater</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12">
									<div class="comments">
										<h3 class="comment-title">Comments (3)</h3>
										<!-- Single Comment -->
										<div class="single-comment">
											<img src="https://via.placeholder.com/80x80" alt="#">
											<div class="content">
												<h4>Alisa harm <span>At 8:59 pm On Feb 28, 2018</span></h4>
												<p>Enthusiastically leverage existing premium quality vectors with enterprise-wide innovation collaboration Phosfluorescently leverage others enterprisee  Phosfluorescently leverage.</p>
												<div class="button">
													<a href="#" class="btn"><i class="fa fa-reply" aria-hidden="true"></i>Reply</a>
												</div>
											</div>
										</div>
										<!-- End Single Comment -->
										<!-- Single Comment -->
										<div class="single-comment left">
											<img src="https://via.placeholder.com/80x80" alt="#">
											<div class="content">
												<h4>john deo <span>Feb 28, 2018 at 8:59 pm</span></h4>
												<p>Enthusiastically leverage existing premium quality vectors with enterprise-wide innovation collaboration Phosfluorescently leverage others enterprisee  Phosfluorescently leverage.</p>
												<div class="button">
													<a href="#" class="btn"><i class="fa fa-reply" aria-hidden="true"></i>Reply</a>
												</div>
											</div>
										</div>
										<!-- End Single Comment -->
										<!-- Single Comment -->
										<div class="single-comment">
											<img src="https://via.placeholder.com/80x80" alt="#">
											<div class="content">
												<h4>megan mart <span>Feb 28, 2018 at 8:59 pm</span></h4>
												<p>Enthusiastically leverage existing premium quality vectors with enterprise-wide innovation collaboration Phosfluorescently leverage others enterprisee  Phosfluorescently leverage.</p>
												<div class="button">
													<a href="#" class="btn"><i class="fa fa-reply" aria-hidden="true"></i>Reply</a>
												</div>
											</div>
										</div>
										<!-- End Single Comment -->
									</div>									
								</div>											
								<div class="col-12">			
									<div class="reply">
										<div class="reply-head">
											<h2 class="reply-title">Leave a Comment</h2>
											<!-- Comment Form -->
											<form class="form" action="#">
												<div class="row">
													<div class="col-lg-6 col-md-6 col-12">
														<div class="form-group">
															<label>Your Name<span>*</span></label>
															<input type="text" name="name" placeholder="" required="required">
														</div>
													</div>
													<div class="col-lg-6 col-md-6 col-12">
														<div class="form-group">
															<label>Your Email<span>*</span></label>
															<input type="email" name="email" placeholder="" required="required">
														</div>
													</div>
													<div class="col-12">
														<div class="form-group">
															<label>Your Message<span>*</span></label>
															<textarea name="message" placeholder=""></textarea>
														</div>
													</div>
													<div class="col-12">
														<div class="form-group button">
															<button type="submit" class="btn">Post comment</button>
														</div>
													</div>
												</div>
											</form>
											<!-- End Comment Form -->
										</div>
									</div>			
								</div>			
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<div class="main-sidebar">
							<!-- Single Widget -->
							<div class="single-widget search">
								<div class="form">
									<input type="email" placeholder="Search Here...">
									<a class="button" href="#"><i class="fa fa-search"></i></a>
								</div>
							</div>
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<div class="single-widget category">
								<h3 class="title">Blog Categories</h3>
								<ul class="categor-list">
									<li><a href="#">Men's Apparel</a></li>
									<li><a href="#">Women's Apparel</a></li>
									<li><a href="#">Bags Collection</a></li>
									<li><a href="#">Accessories</a></li>
									<li><a href="#">Sun Glasses</a></li>
								</ul>
							</div>
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<div class="single-widget recent-post">
								<h3 class="title">Recent post</h3>
								<!-- Single Post -->
								<div class="single-post">
									<div class="image">
										<img src="https://via.placeholder.com/100x100" alt="#">
									</div>
									<div class="content">
										<h5><a href="#">Top 10 Beautyful Women Dress in the world</a></h5>
										<ul class="comment">
											<li><i class="fa fa-calendar" aria-hidden="true"></i>Jan 11, 2020</li>
											<li><i class="fa fa-commenting-o" aria-hidden="true"></i>35</li>
										</ul>
									</div>
								</div>
								<!-- End Single Post -->
								<!-- Single Post -->
								<div class="single-post">
									<div class="image">
										<img src="https://via.placeholder.com/100x100" alt="#">
									</div>
									<div class="content">
										<h5><a href="#">Top 10 Beautyful Women Dress in the world</a></h5>
										<ul class="comment">
											<li><i class="fa fa-calendar" aria-hidden="true"></i>Mar 05, 2019</li>
											<li><i class="fa fa-commenting-o" aria-hidden="true"></i>59</li>
										</ul>
									</div>
								</div>
								<!-- End Single Post -->
								<!-- Single Post -->
								<div class="single-post">
									<div class="image">
										<img src="https://via.placeholder.com/100x100" alt="#">
									</div>
									<div class="content">
										<h5><a href="#">Top 10 Beautyful Women Dress in the world</a></h5>
										<ul class="comment">
											<li><i class="fa fa-calendar" aria-hidden="true"></i>June 09, 2019</li>
											<li><i class="fa fa-commenting-o" aria-hidden="true"></i>44</li>
										</ul>
									</div>
								</div>
								<!-- End Single Post -->
							</div>
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<div class="single-widget side-tags">
								<h3 class="title">Tags</h3>
								<ul class="tag">
									<li><a href="#">business</a></li>
									<li><a href="#">wordpress</a></li>
									<li><a href="#">html</a></li>
									<li><a href="#">multipurpose</a></li>
									<li><a href="#">education</a></li>
									<li><a href="#">template</a></li>
									<li><a href="#">Ecommerce</a></li>
								</ul>
							</div>
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<div class="single-widget newsletter">
								<h3 class="title">Newslatter</h3>
								<div class="letter-inner">
									<h4>Subscribe & get news <br> latest updates.</h4>
									<div class="form-inner">
										<input type="email" placeholder="Enter your email">
										<a href="#">Submit</a>
									</div>
								</div>
							</div>
							<!--/ End Single Widget -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Blog Single -->
			
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
	<!-- Active JS -->
	<script src="../../Public/client/js/active.js"></script>
	<script src="../../Public/client/js/mua.js"></script>
</body>
</html>
