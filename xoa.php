<?php
$svid = $_GET['sid'];
require_once 'condb.php';
$xoa_sql = "DELETE FROM `sinhvien` WHERE id=$svid";
//echo($xoa_sql);

//mysqli_query($conn, $xoa_sql);
if (mysqli_query($conn, $xoa_sql)) {
  echo "Xoá Thành Công";
  echo' <a type="button" class="btn btn-warning" href="lietke.php">Liệt Kê</a>';
} else {
  echo "Error: " . mysqli_error($conn);
}
echo '<script>window.location = "lietke.php";</script>';
//header("Location: /lietke.php");
?>

