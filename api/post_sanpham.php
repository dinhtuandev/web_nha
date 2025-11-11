<?php
include 'config.php';
$data = json_decode(file_get_contents("php://input"), true);
$stmt = $conn->prepare("INSERT INTO sanpham(tensp,giaban,giamgia,hinhnsp,congdung,xuatsu,cachdung,madm,madv)
VALUES(?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("sddssssii", $data['tensp'],$data['giaban'],$data['giamgia'],$data['hinhnsp'],$data['congdung'],$data['xuatsu'],$data['cachdung'],$data['madm'],$data['madv']);
echo $stmt->execute() ? '{"status":"success"}' : '{"status":"fail"}';
?>
<!-- {
  "tensp":"Thuốc A",
  "giaban":120000,
  "giamgia":10,
  "hinhnsp":"thuoc_a.jpg",
  "congdung":"Chữa bệnh A",
  "xuatsu":"Việt Nam",
  "cachdung":"Uống sau ăn",
  "madm":1,
  "madv":1
đây là sửa code 
} -->