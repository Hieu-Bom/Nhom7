<?php 
	
	//$id = $_GET['pro_id'];
	$ten= $_GET['ten'];
	$anh= $_GET['anh'];
	$sl = $_GET['sl'];
	$slc = $_GET['slc'];
	$dg = $_GET['dg'];
	$idu= $_GET['idu'];
	$idp= $_GET['idp'];
	$des= $_GET['des'];

	$conn = mysqli_connect("localhost","root","","danguitar");
	mysqli_query($conn,"SET danguitar 'utf8'");

	$sqls = "SELECT * FROM `tbl_giohang` WHERE `id_pro`='$idp' AND `id_users`='$idu'";
	$kqs = mysqli_query($conn, $sqls);
	$num_rows = mysqli_num_rows($kqs);
	echo $num_rows;
	if ($num_rows!=0)
	{
		$sl=$slc+1;
		echo $sl;
		$sql = "UPDATE `tbl_giohang` SET `soluong`='$sl' WHERE `id_pro`='$idp' AND `id_users`='$idu'";
		$kq = mysqli_query($conn, $sql);
		echo "1";
	}else
	{
		$sql = "INSERT INTO `tbl_giohang`(`name`, `anh`, `soluong`, `dongia`, `id_users`, `id_pro`, `description`) VALUES ('$ten','$anh','$sl','$dg','$idu','$idp','$des')";
		$kq = mysqli_query($conn, $sql);
		echo "2";
	}
	
	if($kq )
	{
		header("location: ../../View/client/index.php");
	} else {echo "Check lại ID và Loại SP!!";}

?>