<?php include 'header.php';

require 'connectie.php';
$Duur = "SELECT * FROM Recepten WHERE Duur = (SELECT MAX(tijdsduur) FROM 'Recepten)'";
$Moeilijkheidsgraad = "SELECT * FROM recepten WHERE Moeilijkheidsgraad = 'moeilijk'";
$Menugang = "SELECT * FROM recepten WHERE Menugang = '1'";
$result = mysqli_query($conn, $sql);

$receptenboek = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Specials</title>
    <link rel="stylesheet" href="css\style.css">
</head>

<body>

</body>

</html>