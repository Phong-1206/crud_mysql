<?php
$id =$_GET["sid"];
require_once 'condb.php';

$edit_sql = "SELECT * FROM `sinhvien` WHERE id=$id";
$dataedit= mysqli_query($conn, $edit_sql);
//$row = mysql_fetch_assoc($dataedit);
$row = $conn->query($edit_sql);
$followingdata = $row->fetch_array(MYSQLI_ASSOC);
//echo $followingdata["hoten"];
?>
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
 <h1> Cập Nhật Sinh Viên</h1>
  <form action="update.php" method="post">
  <div class="form-group">
    <input type="hidden" class="form-control" id="hoten" name="sid" value="<?php echo $followingdata["id"];?>">
        
    <label for="hoten">hoten</label>
    <input type="hoten" class="form-control" placeholder="Enter email" id="hoten" name="hoten" value="<?php echo $followingdata["hoten"];?>">
  </div>
  <div class="form-group">
    <label for="masv">masv</label>
    <input type="masv" class="form-control" placeholder="Enter masv" id="masv" name="masv" value="<?php echo $followingdata["masv"]; ?>">
  </div>
    <div class="form-group">
    <label for="lop">Lớp</label>
    <input type="lop" class="form-control" placeholder="Enter lop" id="lop" name="lop" value="<?php echo $followingdata["lop"]; ?>">
  </div>
  <button type="submit" class="btn btn-primary">Cập Nhật Thông Tin</button>
  </form>
          
</div>
</body>
</html>