<?php 
include("../admincp/connect/config.php");
session_start();
?>
<p>Giỏ hàng</p>
<?php
	if(isset($_SESSION['cart'])){

	}
?>
<table>
  <tr>
    <th>Id</th>
    <th>Mã sản phẩm</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Số lượng</th>
    <th>Giá sản phẩm</th>
  </tr>
    <?php
        if(isset($_SESSION['cart'])){
            $i = 0;
            foreach($_SESSION['cart'] as $cart_item){
                $i++;
        ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $cart_item['masp']; ?></td>
        <td>Maria Anders</td>
        <td>Germany</td>
    </tr>
    <?php
        }
    }else {
    ?>
    <tr>
	    <td colspan=8><p>Hien tai gio hang dang trong</p>
		</td>
  	</tr>
  	<?php
	}
	?>

</table>