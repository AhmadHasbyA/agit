<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>
<body>
    <h1>Kalkulator Proyek</h1>
    <form action="web.php" method="POST">
        <input type="number" name="num1" placeholder="Masukkan angka pertama" required>
        <select name="operator" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="/">/</option>
            <option value="*">*</option>
        </select>
        <input type="number" name="num2" placeholder="Masukkan angka kedua">
        <button type="submit">Hitung</button>
    </form>
 
</body>
</html>


