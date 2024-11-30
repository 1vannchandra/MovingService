<?php
include 'conn.php';

session_start();
if (!$_SESSION['id']) {
    echo "Pengguna belum login!";
}

if (isset($_POST['submit'])) {
    $nama_layanan = $_POST['nama_layanan'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal_permintaan = $_POST['tanggal_permintaan'];
    $status = $_POST['status'];
    $pengguna_id = $_SESSION['id'];
    
    $stmtLayanan = $conn->prepare("INSERT INTO layanan (nama_layanan, deskripsi) VALUES (?, ?)");
    $stmtLayanan->bind_param("ss", $nama_layanan, $deskripsi);
    
    if ($stmtLayanan->execute()) {
        $layanan_id = $stmtLayanan->insert_id;
        
        $stmtPelayanan = $conn->prepare(
            "INSERT INTO input_pelayanan (pengguna_id, layanan_id, tanggal_permintaan, status) VALUES (?, ?, ?, ?)"
        );
        $stmtPelayanan->bind_param("iiss", $pengguna_id, $layanan_id, $tanggal_permintaan, $status);
        
        if ($stmtPelayanan->execute()) {
            echo '
                <script>
                    confirm("Pelayanan berhasil ditambahkan!");
                </script>
            ';
            header('Location: dashboard-service.php');
        } else {
            echo "Error pada tabel input_pelayanan: " . $stmtPelayanan->error;
        }
    } else {
        echo "Error pada tabel layanan: " . $stmtLayanan->error;
    }
}
