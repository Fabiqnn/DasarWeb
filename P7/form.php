<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input PHP</title>
</head>
<body>
    <h2>Form Input PHP</h2>
    <form method="post" action="proses_form.php">
        <label for="Nama">Nama</label>
        <input type="text" name="Nama" id="Nama" required><br><br>

        <label for="email">Email:</label>
        <input type="Email" name="Email" id="Email" required><br><br>

        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>