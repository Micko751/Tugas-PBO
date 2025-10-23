<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Sederhana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #90caf9, #f48fb1);
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 400px;
            margin: 50px auto;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #1976d2;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input, select, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #aaa;
            border-radius: 8px;
        }

        input[type="radio"] {
            width: auto;
        }

        .submit-btn {
            margin-top: 15px;
            background: #1976d2;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 8px;
            width: 100%;
            cursor: pointer;
        }

        .submit-btn:hover {
            background: #0d47a1;
        }

        .hasil {
            background: #e3f2fd;
            border-radius: 10px;
            padding: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Biodata</h2>

    <form method="POST">
        <label>Nama Lengkap:</label>
        <input type="text" name="nama_lengkap" required>

        <label>NIS:</label>
        <input type="number" name="nis" required>

        <label>Jenis Kelamin:</label>
        <input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki
        <input type="radio" name="jenis_kelamin" value="Perempuan" required> Perempuan

        <label>Alamat:</label>
        <textarea name="alamat" rows="2" required></textarea>

        <label>Agama:</label>
        <select name="agama" required>
            <option value="">-- Pilih Agama --</option>
            <option value="Katolik">Katolik</option>
            <option value="Kristen">Kristen</option>
            <option value="Islam">Islam</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
            <option value="Konghucu">Konghucu</option>
        </select>

        <button type="submit" name="btn_submit" class="submit-btn">Kirim</button>
    </form>

    <?php
    if (isset($_POST['btn_submit'])) {
        $nama = $_POST['nama_lengkap'];
        $nis = $_POST['nis'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $agama = $_POST['agama'];

        echo "<div class='hasil'>";
        echo "<h3>Hasil Biodata</h3>";
        echo "Nama Lengkap: <b>$nama</b><br>";
        echo "NIS: <b>$nis</b><br>";
        echo "Jenis Kelamin: <b>$jenis_kelamin</b><br>";
        echo "Alamat: <b>$alamat</b><br>";
        echo "Agama: <b>$agama</b><br>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>
