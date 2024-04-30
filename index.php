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
$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Valentina Pesca',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Paolo Ricci',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Sara Ferdinando',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Francesca Grigio',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Federica Gallo',
            'text' => 'Testo post 6'
        ]
    ],
];

if (isset($_GET['name'])) {
    $name = $_GET['name'];
}
if (isset($_GET['age'])) {
    $age = $_GET['age'];
}
if (isset($_GET['email'])) {
    $email = $_GET['email'];
}
if (strlen($name) > 3 && strpos($email, '@') && strpos($email, '.') && is_numeric($age)) {
    $message = 'Accesso riuscito';
} else {
    $message = 'accesso negato';
}
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
        <?php foreach ($matches as $match) {
            echo "<li>" . $match['homeTeam'] . ' - ' . $match['guestTeam'] . ' | ' . $match['scoreHome'] . ' - ' . $match['scoreGuest'] . "</li>";
        }

        ?>
    </ul>

    <form action="index.php" method="GET">
        <input type="text" name="name" placeholder="name">
        <input type="text" name="age" placeholder="age">
        <input type="text" name="email" placeholder="email">
        <button type="submit">send</button>
    </form>

    <div> <?php if ($name && $age && $email) {
        echo $message;
    } else {
        echo 'compila il form';
    } ?> </div>

    <ul>
        <?php foreach ($posts as $date => $postList) {
            echo $date;
            foreach ($postList as $post) {
                echo "<li>" . ($post['text']) . ' ' . ($post['author']) . "</li>";
            }


        }
        ?>
    </ul>

</body>

</html>