<?php
include 'config.php';
$res = $conn->query("SELECT dh.*, nv.hoten FROM donhang dh 
                     LEFT JOIN nhanvien nv ON dh.manv=nv.manv");
$data = [];
while($r = $res->fetch_assoc()) $data[] = $r;
echo json_encode($data);
?>
