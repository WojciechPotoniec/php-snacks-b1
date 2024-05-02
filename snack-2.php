<?php
/*
Snack 2
Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/

function checkForm()
{
    $message = '';
    if (!empty($_GET['name']) && !empty($_GET['email']) && !empty($_GET['age'])) {
        $name = $_GET['name'];
        $email = $_GET['email'];
        $age = $_GET['age'];
        if (strlen($name) > 3 && strpos($email, '.') && strpos($email, '@') && is_numeric($age)) {
            $message = 'Accesso riuscito';
        } else {
            $message = 'Accesso negato';
        }
    }
    return $message;
}
$access = checkForm();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Snack 2</title>
</head>

<body>
    <header>
        <h1 class="text-center">Snack 2</h1>
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
        <?php if ($access == '') { ?>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
                <div class="mb-3">
                    <label for="name" class="form-label">name</label>
                    <input type="text" class="form-control" id="name" name:"name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name:"email">
                </div>
                <div class="mb-3">
                    <label for="age" class="form-label">Age</label>
                    <input type="number" class="form-control" id="age" name:"age">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-primary">Reset</button>
            </form>
        <?php } else {
            echo '<p>' . $message . '</p>';
        } ?>
    </main>
</body>

</html>