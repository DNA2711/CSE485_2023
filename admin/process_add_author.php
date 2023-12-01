<?php
include ('connection.php')
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['txtAuthorName'])) {
    $conn = getCon();

    $ten_tgia = $_POST['txtAuthorName'];

    // Chuẩn bị truy vấn thêm dữ liệu
    $sql = "INSERT INTO tacgia (ten_tgia) VALUES ('$ten_tgia')";

    $stmt = $conn->prepare($sql);

    if ($stmt->execute()) {
        echo "Thêm dữ liệu thành công.;
    } else {
        echo "Thêm dữ liệu thất bại.;
    }
}
?>
