<?php
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
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>php snacks</title>
</head>

<body>
    <main>
        <section class="d-flex flex-column align-items-center">
            <h2 class="text-center">Snack 1</h2>
            <?php
            foreach ($matches as $match) {
                echo $match['home'] . ' - ' . $match['guest'] . ' | ' . $match['homeScores'] . '-' . $match['guestScores'] . '<br>';
            }
            ?>
        </section>
        <section class="container d-flex flex-column align-items-center">
            <h2 class="text-center pt-5">Snack 2</h2>
            <?php
            if (empty($_GET['name']) || empty($_GET['email']) || empty($_GET['age'])) {
                echo '<h5>Devi inserire un nome, un\' email e un\' età</h5>';
            } else {
                echo '<h5>'. $name = $_GET['name'] . ' ' . $email = $_GET['email'] . ' ' . $age = $_GET['age'].'<h5>';
            }
            ?>
            <form action="index.php" method="GET">
                <input type="text" name="name">
                <input type="email" name="email">
                <input type="number" name="age">
                <button type="submit">Send</button>
            </form>
            <div class="container">
                <span><?php echo (strlen($_GET['name']) < 3) ? 'Accesso negato: il nome deve avere almeno 3 caratteri' : 'Accesso consentito' ?></span>
            </div>
        </section>
    </main>
</body>

</html>