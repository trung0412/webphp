<?php 
    include("../admincp/connect/config.php");
    if(isset($_POST['timkiem'])){
      $tukhoa = $_POST['tukhoa'];
    }
    $sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.tensanpham LIKE '%".$tukhoa."%' ";
    $query_pro = mysqli_query($mysqli,$sql_pro);

?>

<div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Từ khóa tìm kiếm :<?php $_POST['tukhoa'] ?></span></h2>
        </div>
        <div class="row px-xl-5 pb-3">
            <?php
				while ($row_pro = mysqli_fetch_array($query_pro)) {
			?>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="../admincp/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3"><?php echo $row_pro['tensanpham'] ?></h6>
                        <div class="d-flex justify-content-center">
                            <h6 class="text-muted ml-2"><?php echo number_format($row_pro['giasp'],0,',','.').'vnd' ?></h6>
                        </div>
                        <h6 class="text-truncate mb-3"><?php echo $row_pro['tendanhmuc'] ?></h6>
                    </div>
                    <form  method="POST" action="themgiohang.php?idsanpham=<?php echo $row_pro['id_sanpham'] ?> ">
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="detail.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                        <button name="themgiohang" value="Thêm giỏ hàng" class="themgiohang"><i class="fa fa-shopping-cart mr-1"></i>Thêm giỏ hàng</button>
                    </div>
                    </form>
                 </div>

            </div>
            <?php
            } 
            ?>
        </div>
</div>