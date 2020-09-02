<?php

    $squadre = [
        'Acqua S.Bernardo Cantù',
        'Dolomiti Energia Trentino',
        'UNAHOTELS Reggio Emilia',
        'Allianz Pallacanestro Trieste',
        'Fortitudo Lavoropiù Bologna',
        'Vanoli Basket Cremona',
        'A|X Armani Exchange Milano',
        'Germani Brescia',
        'Virtus Roma',
        'Banco di Sardegna Sassari',
        'Happy Casa Brindisi',
        'Virtus Segafredo Bologna',
        'Carpegna Prosciutto Pesaro',
        'Openjobmetis Varese',
        'De\'Longhi Treviso',
        'Umana Reyer Venezia',
       ];

    $partite = [];

    for ($i=0; $i < count($squadre); $i+=2) {

        $partite[] = [
            'casa' => $squadre[$i],
            'ospiti' => $squadre[$i+1],
            'puntiCasa' => rand(0, 120),
            'puntiOspiti' => rand(0, 120)
        ];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>php-snacks-1</title>
</head>
<body>
    <main>
        <div class="content">
            <div class="row">
                <div class="partita">
                    <h2>PARTITA</h2>
                </div>
                <div class="punteggio">
                    <h2>PUNTI</h2>
                </div>

            </div>
                <?php

                    for ($i=0; $i < count($partite); $i++) {

                        ?>
                            <div class="row">

                                <div class="partita">
                                    <?=
                                    $partite[$i]['casa'] . " - " . $partite[$i]['ospiti'];?>
                                </div>
                                <div class="punteggio">
                                    <?=$partite[$i]['puntiCasa'] . "-" . $partite[$i]['puntiOspiti']?>
                                </div>
                            </div>
                        <?php
                    }
                ?>
        </div>
    </main>
</body>
</html>
