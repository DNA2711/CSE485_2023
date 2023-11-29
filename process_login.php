<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $conn = new PDO("mysql:host=localhost;dbname=BTTH01_CSE485", "root", "1");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username = :username";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result !== false) {
            $stored_password = $result['password'];
            $role = $result['role'];

            if ($password == $stored_password) {
                $_SESSION['username'] = $username;
                $_SESSION['role'] = $role;

                if ($role == 'Admin') {
                    header("Location:/CSE485_2023/admin/index.php");
                    exit();
                } elseif ($role == 'User') {
                    header("Location:index.php");
                    exit();
                }
            } else {
                echo "Tên đăng nhập hoặc mật khẩu không đúng.";
            }
        } else {
            echo "Đăng nhập thất bại";
        }


    } catch (PDOException $exception) {
        echo "Connection failed: " . $exception->getMessage();
    } finally {
        $stmt->closeCursor();
        $conn = null;
    }
} else {
    echo "Invalid request method.";
}
?>