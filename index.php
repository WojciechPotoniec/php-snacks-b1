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
<?php
$posts = [
    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
?>
<?php 
$paragraphs = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis reiciendis quibusdam obcaecati, temporibus ad architecto cupiditate expedita quidem hic laudantium, commodi nemo odit laborum! Adipisci ratione iusto perferendis animi mollitia.';

$paragraph = explode('. ', $paragraphs);
?>
<?php
 
 $db = [
     'teachers' => [
         [
             'name' => 'Michele',
             'lastname' => 'Papagni'
         ],
         [
             'name' => 'Fabio',
             'lastname' => 'Forghieri'
         ]
     ],
     'pm' => [
         [
             'name' => 'Roberto',
             'lastname' => 'Marazzini'
         ],
         [
             'name' => 'Federico',
             'lastname' => 'Pellegrini'
         ]
     ]
 ];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    <title>php snacks</title>
</head>

<body>
    <header>
    <h1 class="text-center">Snack PHP</h1>
        <ul class="nav">
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
    <main>
        <!-- SNACK 1 -->
        <section class="d-flex flex-column align-items-center">
            <h2 class="text-center">Snack 1</h2>
            <?php
            foreach ($matches as $match) {
                echo $match['home'] . ' - ' . $match['guest'] . ' | ' . $match['homeScores'] . '-' . $match['guestScores'] . '<br>';
            }
            ?>
        </section>
        <!-- SNACK 2 -->
        <section class="container d-flex flex-column align-items-center">
            <h2 class="text-center pt-5">Snack 2</h2>
            <!-- <?php
            if (empty($_GET['name']) || empty($_GET['email']) || empty($_GET['age'])) {
                echo '<h5>Devi inserire un nome, un\' email e un\' età</h5>';
            } else {
                echo '<h5>' . $_GET['name'] . ' ' . $_GET['email'] . ' ' . $_GET['age'] . '<h5>';
            }
            ?> -->
            <form action="index.php" method="GET">
                <input type="text" name="name">
                <input type="email" name="email">
                <input type="number" name="age">
                <button type="submit">Send</button>
            </form>
            <div class="container">
                <span><?php echo (strlen($_GET['name']) < 3) ? 'Accesso negato: il nome deve avere almeno 3 caratteri' : 'Accesso consentito' ?></span>
                <span><?php echo str_contains('@' && '.', $_GET['email']) ?></span>
            </div>
        </section>
        <!-- SNACK 3 -->
        <section class="d-flex flex-column align-items-center">
            <h2 class="text-center pt-5">Snack 3</h2>
            <?php
            foreach ($posts as $post) {
                foreach ($post as $key => $value) {
                    echo $value['title'] . ' ' . $value['author'] . ' ' . $value['text'] . '<br>';
                }
            }
            ?>
        </section>
        <section class="d-flex flex-column align-items-center">
            <h2 class="text-center pt-5">Snack 4</h2>
            <?php
                function getArrayOfIntegers($min, $max, $nItems) {
                    $numbers = [];
                    while (count($numbers) < $nItems) {
                        $number = rand($min, $max);
                        if(!in_array($number, $numbers)){
                            $numbers[] = $number;
                        };
                };
                return $numbers;
            };
            ?>
            <span><?php foreach (getArrayOfIntegers(1, 100, 15) as $number) { echo $number . ' '; }?></span>
        </section>
        <section class="d-flex flex-column align-items-center">
            <h2 class="text-center pt-5">Snack 5</h2>
            <?php 
                for($i = 0; $i < count($paragraph); $i++){
                    echo $paragraph[$i];
                }
            ?>
        </section>
        <section class="d-flex flex-column align-items-center">
            <h2 class="text-center pt-5">Snack 6</h2>
            <div class="box"><?php foreach ($db as $key => $value) { echo $key . ' ' . $value[''] . '<br>'; } ?></div>
            <div class="box"></div>
        </section>
    </main>
</body>

</html>