<?php
include 'config.php';
$data = json_decode(file_get_contents("php://input"), true);
$stmt = $conn->prepare("INSERT INTO nhanvien(hoten, gt, ns, ngayvl) VALUES(?, ?, ?, ?)");
$stmt->bind_param("ssss", $data['hoten'], $data['gt'], $data['ns'], $data['ngayvl']);
echo $stmt->execute() ? '{"status":"success"}' : '{"status":"fail"}';
?>

<!-- {
  "hoten":"Lê Văn C",
  "gt":"Nam",
  "ns":"1999-08-15",
  "ngayvl":"2024-09-01"
} -->