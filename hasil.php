
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Informasi Pegawai</title>
</head>
<body>
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $agama = $_POST["agama"];
        $jabatan = $_POST["jabatan"];
        $status = $_POST["status"];
        $jumlah = $_POST["jumlah"];

        echo "<h2>Informasi Pegawai</h2>";
        echo "Nama Pegawai = $nama<br>";
        echo "Agama = $agama<br>";
        echo "Jabatan = $jabatan<br>";
        echo "Status = $status<br>";

        if ($status == "menikah") {
            echo "Jumlah anak = $jumlah<br>";
        }
    }
    ?>
    <a href="index.html">Back</a>
</body>
</html>
