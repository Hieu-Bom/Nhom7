<?php 
	//$id = $_GET['pro_id'];
	$idp= $_GET['idp'];
	$sl = $_GET['sl'];
	$x=$_GET['x'];
	echo $sl;
	$conn = mysqli_connect("localhost","root","","danguitar");
	mysqli_query($conn,"SET danguitar 'utf8'");
	if ($sl==0)
	{
		$sql = "DELETE FROM `tbl_giohang` WHERE `id_pro`='$idp'";
		$kq = mysqli_query($conn, $sql);
	}else{
		$sql = "UPDATE `tbl_giohang` SET `soluong`='$sl' WHERE `id_pro`='$idp'";
		$kq = mysqli_query($conn, $sql);
	}



	if($kq && $x!=-1)
	{
		header("location: ../../View/client/cart.php");
	}else
	if($x=-1)
	{
		header("location: ../../View/client/index.php");
	}
	 else {echo "Check lại ID và Loại SP!!";}
	

?>
