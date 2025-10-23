
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Form PHP</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Minor CSS adjustments for better alignment */
        body {
            width: 80%;
            min-height: 100dvh; /* Changed height to min-height */
            border: 1px solid black;
            display: flex;
            flex-direction: column; /* Changed to column layout for body content */
            margin: 20px auto; /* Added margin for top/bottom */
            padding: 20px;
        }

        .form-input {
            display: flex;
            flex-direction: column;
            width: 100%;
            margin-bottom: 15px; /* Added spacing between form inputs */
        }
        
        input[type="text"] {
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button[type="submit"] {
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div style="width:50%; max-width: 400px; margin:0px auto;">
        <h2>Input Data</h2>
        <form action="./" method="POST"> 
            <div class="form-input">
                <label for="name">Nama Lengkap</label>
                <input type="text" id="name" name="name" placeholder="Masukkan nama lengkap anda">
            </div>
            <div class="form-input">
                <label for="catatan">Catatan</label>
                <input type="text" id="catatan" name="catatan" placeholder="Tambahkan catatan singkat"> 
            </div>
            <button type="submit">Simpan</button>
        </form>
    </div>

---

   <div style="width:50%; max-width: 400px; margin: 20px auto;">
    <h2>Output Data</h2>
    <?php
    // Checks if both 'name' and 'catatan' fields were submitted via GET
    if (isset($_POST["name"]) && isset($_POST["catatan"])) {
        $name = $_POST["name"];
        $catatan = $_POST["catatan"];

        // Data is submitted, display the results securely
        echo "<p><strong>Halo, " . htmlspecialchars($name) . "!</strong></p>";
        echo "<p>Catatan Anda: " . htmlspecialchars($catatan) . "</p>";
    } else {
        // Data is NOT submitted (initial load), display the alert
        echo "<script> alert('Silahkan masukkan nama dan catatan anda')</script>";
    }
    ?>
</div>

</body>

</html>
