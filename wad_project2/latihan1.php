<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coba Kalkulator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>


<div class="container mt-5">
        <h2>Calculator</h2>
        <!-- Inputan Angka -->
        <form method="POST" action="proses.php">
            <div class="form-group">
                <label for="angkaInput">Angka:</label>
                <input type="number" class="form-control" id="angkaInput" name="angkaInput" required>
            </div>

            <!-- Buat Dropdown Menu -->
            <div class="form-group">
                <label for="operasi">Pilih Operasi:</label>
                <select class="form-control" id="operasi" name="operasi" required>
                    <option value="dikali">x</option>
                    <option value="dijumlah">+</option>
                    <option value="dikurang">-</option>
                    <option value="dibagi">:</option>
                </select>
            </div>

            <!-- Tombol Hitung -->
            <button type="submit" class="btn btn-primary" name="hitung">Hitung</button>
        
        </form>
    </div>

    <!-- Operasi Kalkulatornya -->
    <?php
        if(isset($_POST['hitung'])){
        $angka = $_POST['angkaInput'];
        $operasi = $_POST['operasinya'];
        $hasil = 0;

        if($operasi == "dikali"){
        $hasil = $angka * $angka;
        } elseif($operasi == "dijumlah"){
        $hasil = $angka + $angka;
        } elseif($operasi == "dikurang"){
        $hasil = $angka - $angka;
        } elseif($operasi == "dibagi"){
        $hasil = $angka / $angka;
        }

     echo "Hasil perhitungan $operasi dari angka $angka adalah: $hasil";
    }
    ?>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>