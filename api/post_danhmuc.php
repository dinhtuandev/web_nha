<?php

include 'config.php';
$data = json_decode(file_get_contents("php://input"), true);
$stmt = $conn->prepare("INSERT INTO danhmuc (tendm) VALUES (?)");
$stmt->bind_param("s", $data['tendm']);
echo $stmt->execute() ? '{"status":"success"}' : '{"status":"fail"}';
?>
<!-- {
  "tendm": "Thuốc bổ"
} -->