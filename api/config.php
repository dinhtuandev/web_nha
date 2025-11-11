<?php
// config.php — Kết nối Database MySQL và xử lý CORS

// ✅ Cho phép truy cập từ mọi nguồn (chỉ nên bật khi DEV)
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

// ✅ Xử lý preflight request của trình duyệt (OPTIONS)
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

// ✅ Cấu hình thông tin kết nối
$host = "localhost";
$user = "root";
$pass = "123456";
$dbname = "qlthuocankhangca1";

// ✅ Kết nối MySQL
$conn = new mysqli($host, $user, $pass, $dbname);

// ✅ Kiểm tra lỗi kết nối
if ($conn->connect_error) {
    die(json_encode([
        "status" => "error",
        "message" => "Kết nối thất bại: " . $conn->connect_error
    ]));
}

// ✅ Thiết lập charset để tránh lỗi tiếng Việt
$conn->set_charset("utf8mb4");
?>
