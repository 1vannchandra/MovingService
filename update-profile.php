<?php
session_start();
include "conn.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_telepon = $_POST['no_telepon'];
    $alamat = $_POST['alamat'];

    $sql = "UPDATE pengguna SET nama = ?, email = ?, no_telepon = ?, alamat = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssi", $nama, $email, $no_telepon, $alamat, $id);

    if ($stmt->execute()) {
        echo "<script>
                alert('Profil berhasil diperbarui.');
                window.location.href = 'dashboard.php';  // Redirect to dashboard.php after alert
            </script>";
    } else {
        echo "<script>
                alert('Gagal memperbarui profil. Silakan coba lagi.');
                window.location.href = 'dashboard.php';  // Redirect to dashboard.php after alert
            </script>";
    }

    $stmt->close();
    $conn->close();
}
