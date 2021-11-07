<?php
$sepatu = array(
  [
    'id' => 1,
    'nama' => 'yeezy',
    'harga' => 100000,
  ],
  [
    'id' => 2,
    'nama' => 'skaters',
    'harga' => 150000,
  ],
  [
    'id' => 3,
    'nama' => 'nike',
    'harga' => 200000,
  ],
  [
    'id' => 4,
    'nama' => 'adidas',
    'harga' => 200000,
  ],
  [
    'id' => 5,
    'nama' => 'jordan',
    'harga' => 1000000,
  ],
);

/**
 * Barang >= 3 && Total Belanja >= 500.000
 * > Discount 30%
 * Barang < 3 && Total Belanja >=  500.000
 * > Discount 20%
 * Barang < 3 && Total Belanja < 500.000
 * > Discount null
 */
function calculateDiscount($products)
{
  $total = 0;
  $output = 0;

  foreach ($products as $value) {
    $total += $value;
  }

  if (count($products) >= 3 && $total >= 500000) {
    $output = $total - ($total * 0.30);
    return header("Location: diskon.php?total={$output}");
  } else if (count($products) < 3 && $total >= 500000) {
    $output = $total - ($total * 0.20);
    return header("Location: diskon.php?total={$output}");
  } else {
    return header("Location: diskon.php?total={$total}");
  }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  calculateDiscount($_POST['product']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Toko Sepatu</title>
</head>

<body>
  Total : <?= $_GET['total'] ?? '' ?>
  <form action="" method="POST">
    <?php
    foreach ($sepatu as $s) {
      echo "<input type='checkbox' id='$s[id]' name='product[$s[id]]' value='$s[harga]'><label for='product'>$s[nama]</label>";
    }
    ?>
    <button type="submit">Beli</button>
  </form>
</body>

</html>