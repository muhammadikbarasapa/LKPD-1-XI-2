<?php 
    $output = ''; // Inisialisasi variabel output
    
    if (isset($_POST['kirim'])) {
        $bilangan1 = $_POST['bil1'];
        $bilangan2 = $_POST['bil2'];
        $aksi = $_POST['aksi'];
        
        switch ($aksi) {
            case 'tambah':
                $output = $bilangan1 + $bilangan2;
                break;
            case 'kurang':
                $output = $bilangan1 - $bilangan2;
                break;
            case 'kali':
                $output = $bilangan1 * $bilangan2;
                break;
            case 'bagi':
                if ($bilangan2 != 0) {
                    $output = $bilangan1 / $bilangan2;
                } else {
                    $output = "Error: Tidak dapat membagi dengan 0!";
                }
                break;            
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>
<body>
    <div class="container mt-5">
        <form method="POST" class="card p-4">
            <h1 class="text-center">Kalkulator</h1>

            <div class="mb-3">
                <label for="bilangan1" class="form-label">Bilangan Pertama:</label>
                <input type="number" class="form-control" name="bilangan1" id="bilangan1" value="0" required>
            </div>
            <div class="mb-3">
                <label for="bilangan2" class="form-label">Bilangan Kedua:</label>
                <input type="number" class="form-control" name="bilangan2" id="bilangan2" value="0" required>
            </div>
            <div class="mb-3">
                <label for="aksi" class="form-label">Aksi:</label>
                <select class="form-select" name="aksi" id="aksi" required>
                    <option value="tambah">Penjumlahan</option>
                    <option value="kurang">Pengurangan</option>
                    <option value="kali">Perkalian</option>
                    <option value="bagi">Pembagian</option>
                </select>
            </div>
            <button type="submit" name="kirim" class="btn btn-primary">Hitung</button>
            <p class="text-center mt-3">Hasil: <strong><?php echo $output; ?></strong></p>
        </form>
    </div>
</body>
</html>
