<?php
	session_start();
	include('../admincp/connect/config.php');
	$id_khachhang = $_SESSION['id_khachhang'];
	$ma_order = rand(0,9999);
	$insert_cart = "INSERT INTO tbl_cart(id_khachhang,code_cart,cart_status) VALUE('".$id_khachhang."','".$ma_order."',1)";
	$cart_query = mysqli_query($mysqli,$insert_cart);
	if($cart_query){    
		//them gio hang chi tiet
		foreach($_SESSION['cart'] as $key => $value){
			$id_sanpham = $value['id'];
			$soluong = $value['soluong'];
			$insert_order_chitiet = "INSERT INTO tbl_cart_chitiet(id_sanpham,code_cart,soluongmua) VALUE('".$id_sanpham."','".$ma_order."','".$soluong."')";
			mysqli_query($mysqli,$insert_order_chitiet);
		}
	}
	unset($_SESSION['cart']);
	header('Location:camondadathang.php?quanly=camondadathang');


?>