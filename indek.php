<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Sederhana</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;
            background: linear-gradient(135deg, #a8edea, #fed6e3);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            display: flex;
            background: white;
            border-radius: 20px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            overflow: hidden;
            width: 850px;
            max-width: 95%;
        }

        .gambar {
            flex: 1;
            background: url('https://cdn.pixabay.com/photo/2017/01/31/17/44/laptop-2025851_960_720.png') center/cover no-repeat;
        }

        .form-container {
            flex: 1;
            padding: 30px;
        }

        h2 {
            text-align: center;
            color: #1976d2;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: 600;
        }

        input, select, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #bbb;
            border-radius: 10px;
            transition: 0.3s;
        }

        input:focus, select:focus, textarea:focus {
            border-color: #1976d2;
            box-shadow: 0 0 6px rgba(25,118,210,0.5);
            outline: none;
        }

        input[type="radio"] {
            width: auto;
            margin-right: 5px;
        }

        .submit-btn {
            margin-top: 20px;
            background: #1976d2;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 10px;
            width: 100%;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        .submit-btn:hover {
            background: #0d47a1;
        }

        .hasil {
            margin-top: 25px;
            background: #e3f2fd;
            border-radius: 10px;
            padding: 15px;
        }

        .hasil h3 {
            margin-top: 0;
            text-align: center;
            color: #1976d2;
        }

        .hasil table {
            width: 100%;
            border-collapse: collapse;
        }

        .hasil td {
            padding: 6px 10px;
            border-bottom: 1px solid #ccc;
        }

        .hasil td:first-child {
            font-weight: bold;
            color: #0d47a1;
            width: 35%;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="gambar"></div>

    <div class="form-container">
        <h2>Form Biodata Sederhana</h2>

        <form method="POST">
            <label>Nama Lengkap:</label>
            <input type="text" name="nama_lengkap" required>

            <label>NIS:</label>
            <input type="number" name="nis" required>

            <label>Jenis Kelamin:</label>
            <input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki
            <input type="radio" name="jenis_kelamin" value="Perempuan" required> Perempuan

            <label>Alamat:</label>
            <textarea name="alamat" rows="3" required></textarea>

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

            <button type="submit" name="btn_submit" class="submit-btn">Kirim Data</button>
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
            echo "<table>";
            echo "<tr><td>Nama Lengkap</td><td>$nama</td></tr>";
            echo "<tr><td>NIS</td><td>$nis</td></tr>";
            echo "<tr><td>Jenis Kelamin</td><td>$jenis_kelamin</td></tr>";
            echo "<tr><td>Alamat</td><td>$alamat</td></tr>";
            echo "<tr><td>Agama</td><td>$agama</td></tr>";
            echo "</table>";
            echo "</div>";
        }
        ?>
    </div>
</div>

</body>
</html>
