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
];


if(isset($_GET['name'])){
    $name = $_GET['name'];
}
if(isset($_GET['age'])){
    $age = $_GET['age'];
}
if(isset($_GET['email'])){
    $email = $_GET['email']; 
}
if(strlen($name)>3 && strpos($email, '@') && strpos($email, '.') && is_numeric($age)) {
    $message = 'Accesso riuscito';
} else { $message = 'accesso negato';}
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

        <form action="index.php" method="GET">
            <input type="text" name="name" placeholder="name">
            <input type="text" name="age" placeholder="age">
            <input type="text" name="email" placeholder="email">
            <button type="submit">send</button>
        </form>

        <div> <?php if($name && $age && $email) { echo  $message ;} else { echo 'compila il form';}?> </div>

</body>

</html>