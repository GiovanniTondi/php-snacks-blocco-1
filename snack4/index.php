<?php

    $numRand = [];

    while (count($numRand) < 15) {

        $num = rand(0, 99);
        if (!in_array($num, $numRand)) {
            $numRand[] = $num;
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>php-snacks-4</title>
</head>
<body>
    <main>
        <div class="content">
            <h2>
                <?php

                    foreach ($numRand as $value) {
                        echo $value . "<br />";
                    }
                ?>
            </h2>
        </div>
    </main>
</body>
</html>
