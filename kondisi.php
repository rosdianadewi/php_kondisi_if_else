<!DOCTYPE html>
<html>

<!-- 
Nama : ROSDIANA DEWI
NIM : 210511173
Prodi : Teknik Informatika
Kelas : K-1
-->

<head>
    <title>Tugas Pemprograman WEB Lanjut</title>
</head>

<body>
    <h1>Kalkulator Sederhana</h1>
    <form method="POST" action="#">
        <label for="angka1">Angka 1:</label>
        <input type="text" name="angka1" id="angka1" required><br><br>

        <label for="angka2">Angka 2:</label>
        <input type="text" name="angka2" id="angka2" required><br><br>

        <label for="operator">Operator:</label>
        <select name="operator" id="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="x"></option>
            <option value="/">/</option>
        </select><br><br>

        <input type="submit" value="Hitung">
    </form>
</body>

</html>

<?php

// Mengecek apakah input telah diberikan
if (isset($_POST['angka1']) && isset($_POST['angka2']) && isset($_POST['operator'])) {
    // Mendapatkan nilai input dari pengguna
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $operator = $_POST['operator'];

    // Memeriksa apakah kedua angka adalah angka valid
    if (is_numeric($angka1) && is_numeric($angka2)) {
        // Melakukan operasi matematika sesuai dengan operator yang dipilih
        if ($operator == '+') {
            $hasil = $angka1 + $angka2;
        } elseif ($operator == '-') {
            $hasil = $angka1 - $angka2;
        } elseif ($operator == '*') {
            $hasil = $angka1 * $angka2;
        } elseif ($operator == '/') {
            // Memastikan tidak ada pembagian oleh nol
            if ($angka2 != 0) {
                $hasil = $angka1 / $angka2;
            } else {
                $hasil = "Tidak bisa membagi oleh nol";
            }
        } else {
            $hasil = "Operator tidak valid";
        }

        // Menampilkan hasil
        echo "$angka1 $operator $angka2 = $hasil";
    } else {
        // Menampilkan pesan kesalahan jika salah satu atau kedua angka tidak valid
        echo "Mohon masukkan angka yang valid.";
    }
} else {
    // Menampilkan pesan jika input tidak diberikan
    echo "Mohon masukkan angka dan pilih operator.";
}
?>