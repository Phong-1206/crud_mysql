<?php
$ht = $_POST["hoten"];
$masv = $_POST["masv"];
$lop = $_POST["lop"];

require_once "condb.php";
$themsql = "INSERT INTO sinhvien (masv, hoten,lop) VALUES (N'$masv',N'$ht', N'$lop')";

if (mysqli_query($conn, $themsql)) {
    echo "Thêm Thành Công";
    echo '<script>window.location = "lietke.php";</script>';
} else {
    echo "Error";
}
?>