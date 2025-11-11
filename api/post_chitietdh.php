<?php
include 'config.php';
$data = json_decode(file_get_contents("php://input"), true);
$stmt = $conn->prepare("INSERT INTO chitietdh(sodh,masp,sl,gia) VALUES(?,?,?,?)");
$stmt->bind_param("iiid",$data['sodh'],$data['masp'],$data['sl'],$data['gia']);
echo $stmt->execute() ? '{"status":"success"}' : '{"status":"fail"}';
?>
<!-- {
  "sodh":1,
  "masp":1,
  "sl":2,
  "gia":108000
} -->