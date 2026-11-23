<?php
include('koneksi.php');
// Ambil data dari form (dengan filter dasar)
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$password = md5($_POST['password']);
// Simpan ke database
$sql = "INSERT INTO users (nim, nama, password)
VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $nim, $nama, $password);
if ($stmt->execute()) {
echo "<script>alert('Registrasi berhasil!');
window.location='../index.php';</script>";
} else {
echo "Gagal menyimpan data: " . $stmt->error;
}
$stmt->close();
$conn->close();
?>