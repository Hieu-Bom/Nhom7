<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
 <title>In hàng hóa</title>
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
 <style type="text/css">
  body{
   width: 1200px;
   margin: 0px auto;
 }
 table{
   margin-top: 150px


 }
 table td{
   color: #00000;
   background-color: #FFFF99;
 }
 h3{
   color: #000000;
   text-align: center;
 }
 h2{
  text-align: center;
  color: blue;
}
.footer-right {
  margin: 0px auto;
}
#ft ul li{
  margin-top: 20px;
  list-style: none;
  float: left;
  margin: 0px auto;
}
</style>
</head>

<body onload="window.print();">

  <div style="margin-top: 50px;" class="company">
    <h3>SHOP BÁN ĐÀN NHÓM 7</h3>
    <h2>HÓA ĐƠN THANH TOÁN</h2>
  </div>
  <div class="footer-right"> <p>Địa chỉ: NHÓM 7 UNETI</p> 
   <p> Hotline : 0123456789</p>
   <p> Email: nhom7@uneti.edu.vn</p><br>
 </div>
 <div class="ht">
    <p> Tên Khách Hàng :...............................</p>
    <p> Địa Chỉ        :...............................</p>
    <p> Số ĐT          :...............................</p>
  </div>

<div id="main">
 <?php

$conn = mysqli_connect("localhost","root","","danguitar");
  mysqli_query($conn,"SET danguitar 'utf8'");
   //tạo chuỗi sql
  if (isset($_SESSION['test']))
    $ten=$_SESSION['test'];
    //kết nối cho giỏ hàng
    if($ten!=null)
    {
        $sql = "SELECT * FROM tbl_giohang where id_users='$ten'";
        $kq=mysqli_query($conn,$sql);
        $demsp=mysqli_num_rows($kq);
    }
?>

 <table class="table shopping-summery">
  <thead>
    <tr class="main-hading">
      <th>PRODUCT</th>
      <th>NAME</th>
      <th class="text-center">UNIT PRICE</th>
      <th class="text-center">QUANTITY</th>
      <th class="text-center">TOTAL</th> 
      <th class="text-center"><i class="ti-trash remove-icon"></i></th>
    </tr>
  </thead>
  <tbody>


    <?php
    $tongtt=0;
    $i=1;
    while(($row4 = mysqli_fetch_array($kq)))
    { 
      ?>
      <tr>
        <td class="image" data-title="No"><img src="../../<?php echo $row4['anh'];?>" alt="#"></td>
        <td class="product-des" data-title="Description">
          <p class="product-name"><a href="#"><?php echo $row4['name']; ?></a></p>
          <p class="product-des"><?php echo $row4['description']; ?> </p>
        </td>
        <td class="price" data-title="Price"><span><?= number_format($row4['dongia'], 0, ",", ".") ?> đ </span></td>
        <td >
          <!-- Input Order -->
          <div class="input-group" style="display: block;">

            <a href="../../Controller/client/xuly_suagiohang.php?idp=<?php echo $row4['id_pro'] ?>&sl=<?php $sl=$row4['soluong']-1; echo $sl; ?>"><i class="fa fa-minus fa-style" aria-hidden="true"></i></a>
            <input style="text-align: center; width: 50px;" type="text" name="sol" class="input-number" data-min="1" data-max="100" value="<?php echo $row4['soluong']; ?>">
            <a href="../../Controller/client/xuly_suagiohang.php?idp=<?php echo $row4['id_pro'] ?>&sl=<?php $sl=$row4['soluong']+1; echo $sl ?>"><i class="fa fa-plus fa-style" aria-hidden="true"></i></a>
          </div>

          <!-- main/themgiohang.php?cong=<?php echo $cart_item['id'] ?> -->
          <!--/ End Input Order -->
        </td>
        <?php $tongtt=$tongtt+ $row4['dongia']*$row4['soluong'];?>
        <td class="total-amount" data-title="Total"><span><?= number_format($row4['dongia']*$row4['soluong'], 0, ",", ".") ?> đ</span></td>
        <td class="action" data-title="Remove"><a href="../../Controller/client/xuly_suagiohang.php?idp=<?php echo $row4['id_pro'] ?>&sl=0"><i class="ti-trash remove-icon"></i></a></td>
      </tr>
      <?php           
    }
    ?>
  </tbody>
</table>
<h4 style="float: right; margin-right: 100px;">Tổng Thanh Toán: <?php echo number_format($tongtt+100000, 0, ",", ".") ?> đ</h4>
<header>
  <button style="margin-top:100px;"><a style="ma" href="index.php"> Quay về Shop!</a></button>
  
</header>

</body>
</html>
