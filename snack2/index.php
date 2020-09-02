<?php

    // functions

    function checkName($str)
    {
        if (strlen($str) > 3) {
            return true;
        }

        return false;
    }

    function checkMail($mail)
    {
        $offset = strpos($mail, '@');

        if (strpos($mail, '@') && (strpos($mail, '.', $offset))) {
            return true;
        }

        return false;
    }

    function checkAge($num)
    {
        if (is_numeric($num)) {
            return true;
        }

        return false;
    }
    //* funcs

    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>php-snacks-2</title>
</head>
<body>
    <main>
        <div class="content">
            <h1>

                <?php

                    if (checkName($name) && checkMail($mail) && checkAge($age)) {
                        echo "Accesso riuscito!";
                    } else {
                        echo "Accesso NEGATO!";
                    }

                ?>
            </h1>
        </div>
    </main>
</body>
</html>
