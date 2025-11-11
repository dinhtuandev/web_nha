<?php
include 'config.php';
$res = $conn->query("SELECT * FROM nhanvien");
$data = [];
while($r = $res->fetch_assoc()) $data[] = $r;
echo json_encode($data);
?>
