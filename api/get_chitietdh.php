<?php
include 'config.php';
$res = $conn->query("SELECT ct.*, sp.tensp FROM chitietdh ct
                     LEFT JOIN sanpham sp ON ct.masp=sp.masp");
$data = [];
while($r = $res->fetch_assoc()) $data[] = $r;
echo json_encode($data);
?>
