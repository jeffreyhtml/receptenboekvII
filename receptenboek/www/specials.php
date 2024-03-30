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
    <center>
        <?php foreach ($receptenboek as $recepten) : ?> <br>

            <h1> <?php echo $recepten['Naam'] ?> </h1> <br>
            <img src="images/<?php echo $recepten['Afbeelding'] ?>" alt="receptfoto"> <br>
            <a href="recepten_detail.php?id=<?php echo $recepten['id'] ?>" class="button-cyan">Details</a>

        <?php endforeach; ?>

    </center>
</body>

</html>