<?php
$deskripsi = '';
$angkacarakter = '0';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $deskripsi = $_POST['angka'] ?? '';
    $carakter = strlen($deskripsi);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung carakter</title>
</head>
<body>
<form method="post">
    <label for="angka">Masukkan teks: </label>
    <input type="text" name="angka" id="angka" value="<?= htmlspecialchars($deskripsi) ?>">
    <button type="submit">Hitung</button>
</form>

<?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
    <p>Total karakter: <?= $carakter ?></p>
<?php endif; ?>
</body>
</html>
