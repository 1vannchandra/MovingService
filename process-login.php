<?php
include 'conn.php';

session_start();
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = crypt($_POST['password'],'bcrypt');
    
    $sql = "SELECT * FROM pengguna WHERE email = '$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($password == $row['PASSWORD']) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['email'] = $row['email'];
            header('Location: dashboard.php');
        } else {
            $_SESSION['error'] = 'Password salah!';
            echo '
                <script>
                    alert("Password salah!");
                </script>
            ';
            header('Location: login.php');
            exit();
        }
    } else {
        $_SESSION['error'] = 'Email tidak ditemukan!';
        header('Location: login.php');
        exit();
    }
}
