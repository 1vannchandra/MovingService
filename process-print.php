<?php
session_start();
include "conn.php";

require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
use Dompdf\Options;

$sql = "
    SELECT pengguna.*, layanan.*, input_pelayanan.*
    FROM pengguna
    JOIN input_pelayanan ON pengguna.id = input_pelayanan.pengguna_id
    JOIN layanan ON layanan.id = input_pelayanan.layanan_id
";

$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

$data = [];
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

$options = new Options();
$options->set('isHtml5ParserEnabled', true);
$options->set('isPhpEnabled', true);
$dompdf = new Dompdf($options);

$html = '<h1 style="text-align: center;">Service Data</h1>';
$html .= '<table border="1" cellpadding="10" style="width: 100%; border-collapse: collapse;">';
$html .= '<tr><th style="background-color: #f2f2f2; padding: 8px;">Nama</th><th style="background-color: #f2f2f2; padding: 8px;">Nama Layanan</th><th style="background-color: #f2f2f2; padding: 8px;">Deskripsi</th><th style="background-color: #f2f2f2; padding: 8px;">Tanggal Permintaan</th></tr>';

foreach ($data as $row) {
    $html .= '<tr>';
    $html .= '<td style="padding: 8px;">' . htmlspecialchars($row['nama']) . '</td>';
    $html .= '<td style="padding: 8px;">' . htmlspecialchars($row['nama_layanan']) . '</td>';
    $html .= '<td style="padding: 8px;">' . htmlspecialchars($row['deskripsi']) . '</td>';
    $html .= '<td style="padding: 8px;">' . htmlspecialchars($row['tanggal_permintaan']) . '</td>';
    $html .= '</tr>';
}

$html .= '</table>';

$dompdf->loadHtml($html);

$dompdf->setPaper('A4', 'portrait');

$dompdf->render();

$dompdf->stream("service_data.pdf", array("Attachment" => 1));

header('location: dashboard-print.php');