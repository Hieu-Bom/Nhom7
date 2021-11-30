<?php
	$id = $_GET['pro_id'];


	
	$conn = mysqli_connect("localhost","root","","danguitar");

	mysqli_query($conn,"SET danguitar 'utf8'");
	$sql = "Select * from `tbl_product` where `pro_id` = '$id' ";
	$kq = mysqli_query($conn, $sql);

	while($row = mysqli_fetch_assoc($kq))
		{
			$id = $row["pro_id"];
			$ten = $row['pro_name'];
			$loai = $row['cat_id'];
			$gia = $row['price'];
			$anh = $row['image'];
			$mota = $row['description'];
		}
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="shortcut icon" href="image/avt.ico" />
		<title>Thêm thông tin sản phẩm</title>
		<style type="text/css">
			body{
				width: auto;
				margin: auto;
				 background: url(../../../anh/sua.jpg);
			}
			#chu-chay{
				width: auto
				margin-left: 150px;
				color: black;
				font-size: 20px;
				font-weight: bold;
				background: #AFEEEE;
				margin-top: -3.4px;
				text-align: center;
			}
			#main form{
				margin-top: 80px;
				margin-left: 700px;
			}
			.tendangnhap{
              margin-top: 20px;
            text-align: center;
            color:black;
            font-size:30px;
        }
		</style>
	</head>
	<body>
		<div id="chu-chay">
			<marquee>Sửa sản phẩm! Chào mừng bạn đến với của hàng chúng tôi . Rất vui khi được đồng hành cùng bạn . Các tùy chọn dịch vụ: Mua sắm tại cửa hàng · Nhận hàng ngay nơi bạn ở · Giao hàng nhanh uy tín .</marquee>
		</div>
		<div class="tendangnhap">
        SỬA THÔNG TIN SẢN PHẨM 
         </div>
		<div id="main">
			<form action="../../../Controller/admin/Suasanpham.php" method="post" >
				<table style="width:600px;height: 550px;background:#ffffff;" border="1px">
					<tr>
						<th style="width: 100px;">
							Pro_ID : 
						</th>
						<th>
							<input style="width: 97%;height: 75%; background:#DCDCDC;" type="text" name="id" value="<?php echo $id ?>" readonly><br>
						</th>
					</tr>
					<tr>
						<th>
							Tên : 
						</th>
						<th >
							<input style="width: 97%;height: 75%; background:#DCDCDC;" type="text" name="ten" value="<?php echo $ten ?>"><br>
						</th>
					</tr>
					<tr>
						<th>
							Loại SP: 
						</th>
						<th>
							<input style="width: 97%;height: 75%; background:#DCDCDC;" type="text" name="loai" value="<?php echo $loai ?>"><br>
						</th>
					</tr>
					<tr>
						<th>
							Giá SP : 
						</th>
						<th>
							<input style="width: 97%;height: 75%; background:#DCDCDC;" type="text" name="gia" value="<?php echo $gia ?>"><br>
						</th>
					</tr>
					<tr>
						<th>
							Ảnh : 
						</th>
						<th>
							<input style="width: 97%;height: 75%; background:#DCDCDC;" type="text" name="anh" value="<?php echo $anh ?>">							
						</th>
					</tr>
					<tr>
						<th>
							Mô tả : 
						</th>
						<th>
							<input style="width: 97%;height: 75%; background:#DCDCDC;" type="text" name="mota" value="<?php echo $mota ?>">							
						</th>
					</tr>
					<tr>
						<th>
							<input style="width:99%;height:100%;background :#D8BFD8 ;" type="submit" name="them" value="Sửa">
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