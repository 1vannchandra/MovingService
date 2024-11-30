<?php

include 'conn.php';

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = crypt($_POST['password'], 'bcrypt');

    $sql = "INSERT INTO pengguna (nama, email, password) VALUES ('$name', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "
            <script>
                alert('Registration Success');
                setTimeout(() => {
                    window.location.href = 'login.php';
                });
            </script>
        ";
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
