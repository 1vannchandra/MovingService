<?php
include 'conn.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputData = json_decode(file_get_contents('php://input'), true);

    if (isset($inputData['id'], $inputData['nama'], $inputData['deskripsi'], $inputData['tanggal'], $inputData['status'])) {
        $id = intval($inputData['id']);
        $nama = $conn->real_escape_string($inputData['nama']);
        $deskripsi = $conn->real_escape_string($inputData['deskripsi']);
        $tanggal = $conn->real_escape_string($inputData['tanggal']);
        $status = $conn->real_escape_string($inputData['status']);

        $query = "
            UPDATE input_pelayanan 
            SET 
                tanggal_permintaan = '$tanggal',
                status = '$status'
            WHERE id = $id;
        ";

        $queryLayanan = "
            UPDATE layanan
            SET 
                nama_layanan = '$nama',
                deskripsi = '$deskripsi'
            WHERE id = (SELECT layanan_id FROM input_pelayanan WHERE id = $id);
        ";

        $result1 = $conn->query($query);
        $result2 = $conn->query($queryLayanan);

        if ($result1 && $result2) {
            echo json_encode(['success' => true, 'message' => 'Data berhasil diperbarui.']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Gagal memperbarui data.']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Data tidak lengkap.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Metode tidak valid.']);
}
?>
