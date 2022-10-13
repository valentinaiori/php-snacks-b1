<?php
/*
Snack 5
Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno.
*/

$classroom = [
    [
        "name" => "Mario",
        "surname" => "Rossi",
        "votes" => [4, 5, 3, 7, 8]
    ],
    [
        "name" => "Martina",
        "surname" => "Neri",
        "votes" => [3, 4, 3, 8, 7]
    ],
    [
        "name" => "Giulio",
        "surname" => "Ferrari",
        "votes" => [4, 2, 7, 6, 5]
    ],
    [
        "name" => "Daniele",
        "surname" => "Bianchi",
        "votes" => [5, 4, 5, 7, 4]
    ],
    [
        "name" => "Edoardo",
        "surname" => "Russo",
        "votes" => [7, 9, 7, 10, 8]
    ],
];

$sumVotes = 0;
$media = 0;
?>

<h2>CLASSROOM</h2>

<div>
        <?php foreach ($classroom as $alumn) : ?>
            <div>
                <h3>Alunno:</h3>
                <p>Nome: <?= $alumn["name"] ?></p>
                <p>Cognome: <?= $alumn["surname"] ?></p>
                <?php for ($i = 0; $i < count($alumn["votes"]); $i++) {
                    $sumVotes += $alumn["votes"][$i];
                };

                $media = $sumVotes / count($alumn["votes"]);
                $sumVotes = 0
                ?>
                <p>Media dei voti: <?= number_format($media, 1) ?></p>
            </div>
        <?php endforeach ?>
    </div>