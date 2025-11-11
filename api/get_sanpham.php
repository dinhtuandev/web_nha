<?php
include 'config.php';
$sql = "SELECT sp.*, dm.tendm, dv.tendv FROM sanpham sp
        LEFT JOIN danhmuc dm ON sp.madm=dm.madm
        LEFT JOIN donvitinh dv ON sp.madv=dv.madv";
$res = $conn->query($sql);
$data = [];
while($r = $res->fetch_assoc()) $data[] = $r;
echo json_encode($data);
?>
