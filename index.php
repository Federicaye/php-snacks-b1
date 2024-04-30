<?php
$matches = [
    [
        "homeTeam" => "Roma",
        "guestTeam" => "Yuve",
        "scoreHome" => 3,
        "scoreGuest" => 0,
    ],
    [
        "homeTeam" => "Milan",
        "guestTeam" => "Fiorentina",
        "scoreHome" => 2,
        "scoreGuest" => 1,
    ],
    [
        "homeTeam" => "Roma",
        "guestTeam" => "Yuve",
        "scoreHome" => 3,
        "scoreGuest" => 0,
    ],
    [
        "homeTeam" => "Roma",
        "guestTeam" => "Yuve",
        "scoreHome" => 3,
        "scoreGuest" => 0,
    ],
]

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php foreach ($matches as $match => $value) { 
             echo "<li>" . $matches[$match]['homeTeam'] . ' - ' . $matches[$match]['guestTeam'] . ' | ' . $matches[$match]['scoreHome'] . '-' . $matches[$match]['scoreGuest'] . "</li>" ;}
        
        ?>
      
       
        </ul>
</body>

</html>