<?php
// api.php
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");

// 1. Koneksi Database
$host = "localhost";
$user = "root";
$pass = "";      // Password XAMPP standar kosong
$db   = "webgis_sultra";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die(json_encode(["error" => "Koneksi Database Gagal: " . $conn->connect_error]));
}

// 2. Query Data + Hitung Rasio
// Kita hitung rasionya langsung di sini biar Javascript tinggal terima beres
$sql = "SELECT 
            nama_kabkota,
            pln,
            non_pln,
            bukan_listrik,
            ROUND(((pln + non_pln) / (pln + non_pln + bukan_listrik)) * 100, 2) AS rasio_elektrifikasi
        FROM sumber_energi";

$result = $conn->query($sql);
$data = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

echo json_encode($data);
$conn->close();
?>