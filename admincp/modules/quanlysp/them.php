<p>Thêm  sản phẩm</p>
<table border="1" width="100%" style="border-collapse: collapse;">
<form method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data">
  <tr>
    <td>Tên sản phẩm </td>
    <td><input type="text" name="tensanpham" width="100%"></td>
  </tr>
  <tr>
    <td>Mã sản phẩm </td>
    <td><input type="text" name="masanpham" width="100%"></td>
  </tr>
  <tr>
    <td>Giá sản phẩm </td>
    <td><input type="text" name="giasp" width="100%"></td>
  </tr>

  <tr>
    <td>Số Lượng sản phẩm </td>
    <td><input type="text" name="soluong" width="100%"></td>
  </tr>
  <tr>
    <td>hình ảnh sản phẩm </td>
    <td>
      <input type="file" name="hinhanh" width="100%">
    </td>
  </tr>
  <tr>
    <td>Tóm tắt </td>
    <td><textarea rows="10"  name="tomtat" style="resize: none"></textarea></td>
  </tr>
  <tr>
    <td>Nội dung sản phẩm </td>
    <td><textarea rows="10"  name="noidung" style="resize: none"></textarea></td>
  </tr>
  <tr>
    <td>Danh mục sản phẩm</td>
    <td><select name="danhmuc">
        <?php 
        $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
        $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
        while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
        ?>
        <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
        <?php
        }
        ?>
      </select>
    </td>
  </tr>

  <tr>
    <td>Tình trạng</td>
    <td><select name="tinhtrang">
        <option value="1">Kích hoạt</option>
        <option value="0">Ẩn</option>
      </select>
    </td>
  </tr>
  <tr>
    
    <td colspan="2"><input type="submit" name="themsanpham" value="Thêm danh mục sản phẩm"></td>
  </tr>
</form>
</table>