<!DOCTYPE html>
<html>
	<head>
		<link rel="shortcut icon" href="image/avt.ico" />
		<title>Thêm thông tin sản phẩm</title>
		<style type="text/css">
			body{
				width:auto;
				margin: auto;
				 background: url(../../../anh/them2.jpg);
			}
			#chu-chay{
			  width:auto;
            margin-right: 150px;
            margin-left: 150px;
                color:#C0C0C0;
            font-size: 20px;
            font-weight: bold;
            background: white;
            margin-top: -3.4px;
            text-align: center;
			}
			#main{
				width: 1024px;
			margin-right: 100px;
			}
			#main form{
				margin-left: 600px;
				margin-top: 100px;
			}
			.tendangnhap{
              margin-top: 30px;
            text-align: center;
            color:black;
            font-size:30px;
            }
		</style>
	</head>
	<body>
		<div id="chu-chay">
			<marquee>Thêm thông tin sản phẩm!Chào mừng bạn đến với của hàng chúng tôi . Rất vui khi được đồng hành cùng bạn . Các tùy chọn dịch vụ: Mua sắm tại cửa hàng · Nhận hàng ngay nơi bạn ở · Giao hàng nhanh uy tín .</marquee>
		</div>
		 <div class="tendangnhap">
     THÊM SẢN PHẨM 
        </div>
		<div id="main">
			<form action="../../../Controller/admin/Themsanpham.php" method="post" >
				<table border="1px" style="width: 800px;height: 500px;background: #ffffff;">
					<tr>
						<th style="color:#000000">
							Pro_ID : 
						</th>
						<th>
							<input style="width: 97%;height: 75%;background: #DCDCDC; type="text" name="id"><br>
						</th>
					</tr>
					<tr>
						<th>
							Tên : 
						</th>
						<th>
							<input style="width: 97%;height: 75%;background: #DCDCDC; type="text" name="ten"><br>
						</th>
					</tr>
					<tr>
						<th>
							Loại SP: 
						</th>
						<th>
							<input style="width: 97%;height: 75%;background: #DCDCDC; type="text" name="loai"><br>
						</th>
					</tr>
					<tr>
						<th>
							Giá SP : 
						</th>
						<th>
							<input style="width: 97%;height: 75%;background:#DCDCDC; type="text" name="gia"><br>
						</th>
					</tr>
					<tr>
						<th>
							Ảnh : 
						</th>
						<th>
							<input style="width: 97%;height: 75%;background:#DCDCDC; type="text" name="anh">							
						</th>
					</tr>
					<tr>
						<th>
							Mô tả : 
						</th>
						<th>
							<input  style="width: 97%;height: 75%;background:#DCDCDC; type="text" name="mota">							
						</th>
					</tr>
					<tr>
						<th>
							<input style="width: 97%;height: 95%; background:#DCDCDC;" type="submit" name="them" value="Thêm">
						</th>
						<th>
							<button style="width: 99%;height: 100%;background:#90EE90 ">
								<a href='Sanpham.php' title='Quay lại'>Quay lại</a> 
							</button>
						</th>
					</tr>
				</table>
			</form>
		</div>
		<div class="Menu">
			

			<?php
				$conn = mysqli_connect("localhost","root","","danguitar");
				mysqli_query($conn,"SET danguitar 'utf8'");
	                //tạo chuỗi sql
				$sql1 = "SELECT * FROM tbl_category";
	                //Thực hiện query truy vấn
				$kq1=mysqli_query($conn,$sql1);
			?>

			<ul>
				<h3> Danh sách loại Sản Phẩm: </h3>
				<?php
				$j=0;
				while(($row1 = mysqli_fetch_array($kq1))&&($j<10))
					{   $j++;
						?>
						<li>
							<a style="font-size: 20px; text-decoration: none;" href="">
								<?php
								echo $row1['cat_id'];
								echo "---";
								 echo $row1['cat_name'];
								?>
							</a>
						</li>
						<?php           
					}
					?>
				</ul>
		</div>
	</body>
</html>