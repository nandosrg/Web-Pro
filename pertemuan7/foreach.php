<html>
<head>
<title>Absensi Mahasiswa</title>
</head>
<body>
Daftar Hadir Mahasiswa
<br>
<?php
$mahasiswa = [
    "NIM: 17250049 - Adriyan Sahpitran - Kelas: 17.3A.03",
    "NIM: 17250072 - Widya Putri Rahayu - Kelas: 17.3A.03",
    "NIM: 17250199 - Ridho Firmansyah - Kelas: 17.3A.03",
    "NIM: 17250206 - Rangga Aji Pramudya - Kelas: 17.3A.03",
    "NIM: 17250232 - Fernando Hasudungan Siregar - Kelas: 17.3A.03",
    "NIM: 17250278 - Duta Arrasyid - Kelas: 17.3A.03",
    "NIM: 17250323 - Glen Justin Maringan Simarmata - Kelas: 17.3A.03",
    "NIM: 17250313 - Renal Ali Syahid - Kelas: 17.3A.03",
    "NIM: 17250371 - Arla Maulana Eza Nugraha - Kelas: 17.3A.03",
    "NIM: 17250374 - Kevin Nabil Noor Rahman - Kelas: 17.3A.03",
    "NIM: 17250400 - Ahmad Fauzan Rizki - Kelas: 17.3A.03",
    "NIM: 17250439 - Ahmad Abu Jihad Bilhaq - Kelas: 17.3A.03",
    "NIM: 17250561 - Intan Purnamasari - Kelas: 17.3A.03",
    "NIM: 17250571 - Abdillah - Kelas: 17.3A.03",
    "NIM: 17250513 - Sefti Jikas Mu’afari - Kelas: 17.3A.03",
    "NIM: 17250654 - Ali Muslih Alfauzan - Kelas: 17.3A.03"
];

foreach ($mahasiswa as $nama) {
    echo "$nama <br>";
}
?>
</body>
</html>