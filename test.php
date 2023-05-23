<?php

if(!isset($_POST['submit'])) {

  header("location:index.html");

}

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$ttl1 = $_POST['tempat'];
$ttl2 = $_POST['tanggal'];
$jeniskelamin = $_POST['jeniskelamin'];
$alamat = $_POST['alamat'];
$agama = $_POST['agama'];
$status = $_POST['status'];
$pekerjaan = $_POST['pekerjaan'];
$kewarga = $_POST['kewarga'];
$berlaku = $_POST['berlaku'];
// $gambar = $_POST['gambar'];
// gambar
$target_dir = "gambar/";
$gambar = $target_dir . basename($_FILES["gambar"]["name"]);
$uploadgambar = 1;
$imageFileType = strtolower(pathinfo($gambar, PATHINFO_EXTENSION));

// Jika file berhasil diunggah, simpan gambar sementara
	move_uploaded_file($_FILES["gambar"]["tmp_name"], $gambar);




$tanggalpem = $_POST['tanggalpem'];
// ttd
$target_dir = "ttd/";
$ttd = $target_dir . basename($_FILES["ttd"]["name"]);
$uploadttd = 1;
$imageFileType = strtolower(pathinfo($ttd, PATHINFO_EXTENSION));

// Jika file berhasil diunggah, simpan ttd sementara 
	move_uploaded_file($_FILES["ttd"]["tmp_name"], $ttd);






?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data KTP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .data-ktp {
            width: 500px;
            margin: 0 auto;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 20px;
        }

        .data-ktp p {
            margin: 0;
            padding-bottom: 10px;
        }

        .data-ktp img {
            max-width: 200px;
            max-height: 200px;
            margin-top: 10px;
        }

        .label {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h2>Data KTP</h2>
    <div class="data-ktp">
        <p><span class="label">NIK:</span> <?= $nik; ?></p>
        <p><span class="label">Nama:</span> <?= $nama; ?></p>
        <p><span class="label">Tempat Tanggal Lahir:</span> <?= $ttl1 . ", " . $ttl2; ?></p>
        <p><span class="label">Jenis Kelamin:</span> <?= $jeniskelamin; ?></p>
        <p><span class="label">Alamat:</span> <?= $alamat; ?></p>
        <p><span class="label">Agama:</span> <?= $agama; ?></p>
        <p><span class="label">Status Perkawinan:</span> <?= $status; ?></p>
        <p><span class="label">Pekerjaan:</span> <?= $pekerjaan; ?></p>
        <p><span class="label">Kewarganegaraan:</span> <?= $kewarga; ?></p>
        <p><span class="label">Berlaku Hingga:</span> <?= $berlaku; ?></p>
        <p><span class="label">Gambar:</span></p>
        <img src="<?= $gambar; ?>" alt="Foto">
        <p><span class="label">Tanggal Penerimaan:</span> <?= $tanggalpem; ?></p>
        <p><span class="label">Tanda Tangan:</span></p>
        <img src="<?= $ttd; ?>" alt="Tanda Tangan">
    </div>
</body>

</html>
