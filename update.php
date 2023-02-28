<?php
$ht = $_POST["hoten"];
$masv = $_POST["masv"];
$lop = $_POST["lop"];
$id = $_POST["sid"];

require_once "condb.php";
$updatesql = "UPDATE sinhvien SET masv='$masv', hoten='$ht', lop='$lop' WHERE id=$id";
//echo $updatesql ; exit;
if (mysqli_query($conn, $updatesql)) {
    echo "UPDATE Thành Công";
    echo '<script>window.location = "lietke.php";</script>';
} else {
    echo "Error";
}
?>