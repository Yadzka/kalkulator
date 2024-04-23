<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Kalkulator</title>
    <!-- My Style CSS -->
    <link href="style.css" rel="stylesheet" type="text/css">

</head>

<body>
    <!-- Form kalkulator start -->
    <form>
        <h1>Hasil Perhitungan</h1>
        <?php
        // Mengambil nilai dari main.php 
        $angka1 = $_GET['angka1']; //mengambil nilai dari form angka1 di main.php
        $angka2 = $_GET['angka2']; //mengambil nilai dari form angka2 di main.php
        $operator = $_GET['operator']; //mengambil nilai dari form operator di main.php
        
        // Logika operator start
        if ($operator == '+') {
            $hasil = $angka1 + $angka2; //logika penjumlahan
        } else if ($operator == '-') {
            $hasil = $angka1 - $angka2; //logika pengurangan
        } else if ($operator == ':') {
            $hasil = $angka1 / $angka2; //logika pembagian
        } else if ($operator == 'x') {
            $hasil = $angka1 * $angka2; //logika perkalian
        };
        // Logika operator end
        
        // Tampilan dari hasil kalkulator
        echo $angka1 . $operator . $angka2 . '=' . $hasil;
        ?>
        <!-- Tombol Kembali -->
        <a href="main.php">Kembali</a>
        <a type="button" onclick="return window.print();">Cetak</a>
    </form>
</body>

</html>