<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Kalkulator Simpel</title>
    <!-- My Style CSS -->
    <link href="style.css" rel="stylesheet" type="text/css">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Audiowide&family=Montserrat:wght@300;400;700&family=Press+Start+2P&family=Quicksand:wght@300..700&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- Form kalkulator start -->
    <form action="hasil.php"> <!-- Form action yang menunjukkan bahwa data akan dikirimkan ke file hasil.php saat formulir nanti dikirim -->
        <h1>Kalkulator Simpel</h1> 
        <input type="number" name="angka1"> <!-- Input pertama yaitu angka pertama -->
        <select name="operator"> <!-- Operator dari penjumlahan, pengurangan, pembagian dan perkalian -->
            <option> + </option>
            <option> - </option>
            <option> : </option>
            <option> x </option>
        </select>
        <input type="number" name="angka2"> <!-- Input pertama yaitu angka kedua -->
        <button type="submit">Hitung</button> <!-- Tombol untuk menunjukkan hasil -->
    </form>
    <!-- Form kalkulator end -->
</body>

</html>