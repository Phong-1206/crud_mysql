
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">

  <table class="table table-bordered">
      <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
    <thead>
      <tr>

        <th>Họ Tên</th>
        <th>Ảnh</th>
        <th>Mã Sinh Viên</th>
        <th>Lớp</th>
        <th ><a class="btn btn-success" data-toggle="modal" data-target="#myModal">Thêm</a> </th>
        
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Thêm Sinh Viên</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="container">
  <form action="them.php" method="post" href="lietke.php">
  <div class="form-group">
    <label for="hoten">Họ Tên</label>
    <input type="hoten" class="form-control" placeholder="Họ và Tên" id="hoten" name="hoten">
  </div>
  <div class="form-group">
    <label for="masv">Mã Sinh Viên</label>
    <input type="masv" class="form-control" placeholder="Mã Sinh Viên" id="masv" name="masv">
  </div>
    <div class="form-group">
    <label for="lop">Lớp</label>
    <input type="lop" class="form-control" placeholder="Lớp" id="lop" name="lop">
  </div>
  <button type="submit" class="btn btn-primary"><a>Submit</a>
</button>
</form>
          
</div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
      </tr>
    </thead>
    <style>
    img{
height:100px;
width: 100px;
}
    </style>
    <tbody id="myTable">
      <?php
require_once "condb.php";
///$lietke_sql ="SELECT * FORM sinhvien order by lop, hoten";
///$lietke_sql ="SELECT * FROM `sinhvien` ORDER BY `lop`, `hoten`";
$lietke_sql ="SELECT * FROM `sinhvien` ORDER BY `id`";
//$page = 1 ;
//$start_from = ($page-1) * 4;
//$sql = "SELECT * FROM `sinhvien` ORDER BY `lop`, `hoten` ASC LIMIT $start_from,4";
$datadb = mysqli_query($conn, $lietke_sql);
while ($r = mysqli_fetch_assoc($datadb)){
  ?>
        <tr>
        <td><?php echo $r['hoten']?></td>
         <td><img class="mx-auto d-block" src="https://www.invert.vn/media/uploads/uploads/2022/12/06172901-11.jpeg" 
         /></td>
        <td><?php echo $r['masv']?></td>
        <td><?php echo $r['lop']?></td>
        <td>
          <a type="button" class="btn btn-warning" href="edit.php?sid=<?php echo $r['id']?>">Sửa</a> 
        <a type="button" class="btn btn-danger" href="xoa.php?sid=<?php echo $r['id']?>" onclick="return confirm('Bạn có muốn xoá cái này không');" >Xoá </a></td>
      </tr>
 <?php
    }
?>

      </tbody>
  </table>
</div>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</body>
</html>