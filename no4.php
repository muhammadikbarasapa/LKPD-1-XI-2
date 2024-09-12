<?php 

$angka = isset($_POST['angka']) ? $_POST['angka'] :"";
$hasil = "";

function isPrima($n) {
    if ($n <= 1) return false;

    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) return false;
    }

    return true;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (is_numeric($angka)) {
        if (isPrima($angka)) {
            $prima = "$angka ini bilangan prima";
    }else{
        $prima = "$angka bukan bilangan prima";
    }
} 
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bilangan Prima</title>
</head>
<body>
    <form method="post">
        <label for="angka">Masukkan angka: </label>
        <input type="text" name="angka" id="angka" value="<?= $angka ?>">
        <button type="submit">Submit</button>
        <p><?php echo isset($prima) ? $prima : ''; ?></p>
    </form>
</body>
</html>