<?phpinclude ('connection.php');if (isset($_GET['id'])) {    $id = $_GET['id'];    $conn = getCon();    $sql = "DELETE FROM tacgia WHERE ma_tgia = $id";    if ($conn->query($sql) === TRUE) {        echo "Xóa thành công";    } else {        echo "Xóa thất bại: " . $conn->error;    }    $conn->close();} else {    echo "Không tìm thấy mã tác giả";}