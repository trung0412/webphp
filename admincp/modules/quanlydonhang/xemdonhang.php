<p>Xem đơn hàng</p>
<?php
    $code = $_GET['code'];
	$sql_lietke_dh = "SELECT * FROM tbl_cart_chitiet,tbl_sanpham WHERE tbl_cart_chitiet.id_sanpham=tbl_sanpham.id_sanpham AND tbl_cart_chitiet.code_cart='".$code."' ORDER BY tbl_cart_chitiet.id_cart_chitiet DESC";
	$query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);        
?>
<table style="width:100%" border="1" style="border-collapse: collapse;">
  <tr style="text-align: center;">
  	<th>Id</th>
    <th>Mã đơn hàng</th>
    <th>Tên sản phẩm</th>
    <th>Số lượng</th>
    <th>Đơn giá</th>
    <th>Thành tiền</th>
  
  </tr>
  <?php
  $i = 0;
  $tongtien=0;
  while($row = mysqli_fetch_array($query_lietke_dh)){
  	$i++;
    $thanhtien = $row['giasp']* $row['soluongmua'];
    $tongtien += $thanhtien;
  ?>
  <tr style="text-align: center;">
  	<td><?php echo $i ?></td>
    <td><?php echo $row['code_cart'] ?></td>
    <td><?php echo $row['tensanpham'] ?></td>
    <td><?php echo $row['soluongmua'] ?></td>
    <td><?php echo number_format($row['giasp'],0,',','.').'vnd' ?></td>
    <td><?php echo number_format($row['giasp']* $row['soluongmua'],0,',','.').'vnd'?></td>
  </tr>
  <?php
  } 
  ?>
  <tr>
   <td colspan="6">
        <p>Tổng tiền : <?php echo number_format($tongtien,0,',','.').'vnd'?></p>
    </td>
  </tr>
 
</table>