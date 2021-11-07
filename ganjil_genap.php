<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Membedakan Bilangan Ganjil dan Genap</title>
</head>

<body>
  <form action="checking.php" method="POST">
    <input type="text" name="num">
    <button type="submit">Proses</button>
  </form>

  <?= $_GET['message'] ?? "" ?>
</body>

</html>