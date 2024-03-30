<?php
require 'connectie.php';
$sql = "SELECT COUNT(*) AS count FROM recepten";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

$recepten_aantal = $row['count'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/style.css" />
  <title>Document</title>
</head>

<body>
  <nav>
    <div class="navbar">
      <p class="navbar_title">Jeffrey's Receptenboek</p>
      <a href="index.php">Home</a>
      <a href="recepten.php">Recepten</a>
      <p>Aantal Recepten:<?php echo $recepten_aantal ?></p>
    </div>
  </nav>
</body>

</html>