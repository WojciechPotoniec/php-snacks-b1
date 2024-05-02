<?php

/*
Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 
*/

$matches = [
    [
        'home' => 'Olimpia Milano',
        'guest' => 'Cantù',
        'guestScores' => 55,
        'homeScores' => 60
    ],
    [
        'home' => 'Atlanta Hawks',
        'guest' => 'Oklahoma City Thunder',
        'guestScores' => 120,
        'homeScores' => 110
    ],
    [
        'home' => 'Charlotte Hornets',
        'guest' => 'Chicago Bulls',
        'guestScores' => 106,
        'homeScores' => 102
    ],
    [
        'home' => 'Cleveland Cavaliers',
        'guest' => 'Denver Nuggets',
        'guestScores' => 99,
        'homeScores' => 85
    ],
    [
        'home' => 'Milwaukee Bucks',
        'guest' => 'Washington Wizards',
        'guestScores' => 75,
        'homeScores' => 90
    ],
];
$template = '';
foreach ($matches as $match) {
$template .= "<li class='list-group-item'>$match[home] - $match[guest] | $match[homeScores]-$match[guestScores]</li>";
};
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Snack 1</title>
</head>

<body>
    <header>
        <h1 class="text-center">Snack 1</h1>
        <ul class="nav d-flex justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="snack-1.php">Snack 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="snack-2.php">Snack 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="snack-3.php">Snack 3</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="snack-4.php">Snack 4</a>
            </li>
        </ul>
    </header>
    <main class="container">
        <ul class="list-group">
            <?php
                echo $template;
            ?>
        </ul>
    </main>
</body>

</html>