<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "style.css">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .mid{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
    <div class="card w-100 mt-5 center text-center">
    <H1>Rental Motor</H1>
    <form method=POST class = "Form">
    <label>Masukkan Nama: </label>
    <input type="text" id="nama" name="nama" required><br>

    <label>Masukkan Waktu Rental : </label>
    <input type="number" id="waktu" name="waktu" required><br>

    <label>Pilih jenis Motor :</label>
    <select id="jenis" name="jenis">
        <option value="Mio63free">Mio63free</option>
        <option value="Aerok58">Aerok58</option>
        <option value="Vesmet">Vesmet</option>
        <option value="Rcbrice">Rcbrice</option>
    </select> <br>
    <input type="submit" value="Kirim" name="kirim">
    </form>
    <br>
    <?php
include ('logic.php');
if(isset($_POST['kirim'])) {
    $proses = new Beli();
    $proses->setHarga(50000, 60000, 70000, 80000);
    $proses->nama = $_POST['nama'];
    $proses->waktu = $_POST['waktu'];
    $proses->jenis = $_POST['jenis'];
    echo $proses->CetakPembelian();
}
?>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>


