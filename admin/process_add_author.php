<?php
// Kiểm tra khi form được submit
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['txtAuthorName'])) {
    $db_conn = mysqli_connect("localhost","root","1","BTTH01_CSE485");

    $ten_tgia = $_POST['txtAuthorName'];

    // Chuẩn bị truy vấn thêm dữ liệu
    $sql = "INSERT INTO tacgia (ma_tgia, ten_tgia) VALUES ('13','$ten_tgia')";

    $insert_data = $db_conn->query($sql);


  /*  if ($db_conn->query($sql) === TRUE) {
        echo "Thêm Thể loại thành công";
    } else {
        echo "Lỗi: " . $sql . "<br>" . localhost->error;
    }*/
}
?>
