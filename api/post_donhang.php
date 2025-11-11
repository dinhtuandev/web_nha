<?php
include 'config.php';
$data = json_decode(file_get_contents("php://input"), true);
$stmt = $conn->prepare("INSERT INTO donhang(ngaytao,giamgia,manv) VALUES(NOW(),?,?)");
$stmt->bind_param("di",$data['giamgia'],$data['manv']);
echo $stmt->execute() ? '{"status":"success"}' : '{"status":"fail"}';
?>
<!-- {
  "giamgia":15,
  "manv":1
} -->