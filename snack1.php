<?php

/* 
Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
*/

$basket_matches = [
    [
        "homeTeam" => "EA7 EMPORIO ARMANI MILANO",
        "opposingTeam" => "GIVOVA SCAFATI",
        "homeTeamPoints" => "66",
        "opposingTeamPoints" => "75",
    ],
    [
        "homeTeam" => "GERMANI BRESCIA",
        "opposingTeam" => "OPENJOBMETIS VARESE",
        "homeTeamPoints" => "88",
        "opposingTeamPoints" => "83",
    ],
    [
        "homeTeam" => "DOLOMITI ENERGIA TRENTINO",
        "opposingTeam" => "NUTRIBULLET TREVISO BASKET",
        "homeTeamPoints" => "66",
        "opposingTeamPoints" => "57",
    ],
    [
        "homeTeam" => "BANCO DI SARDEGNA SASSARI",
        "opposingTeam" => "TEZENIS VERONA",
        "homeTeamPoints" => "101",
        "opposingTeamPoints" => "79",
    ],
    [
        "homeTeam" => "HAPPY CASA BRINDISI",
        "opposingTeam" => "GEVI NAPOLI BASKET",
        "homeTeamPoints" => "77",
        "opposingTeamPoints" => "70",
    ],
    [
        "homeTeam" => "VIRTUS SEGAFREDO BOLOGNA",
        "opposingTeam" => "PALLACANESTRO TRIESTE",
        "homeTeamPoints" => "85",
        "opposingTeamPoints" => "80",
    ],
    [
        "homeTeam" => "UNAHOTELS REGGIO EMILIA",
        "opposingTeam" => "BERTRAM YACHTS DERTHONA TORTONA",
        "homeTeamPoints" => "59",
        "opposingTeamPoints" => "63",
    ],
    [
        "homeTeam" => "CARPEGNA PROSCIUTTO PESARO",
        "opposingTeam" => "UMANA REYER VENEZIA",
        "homeTeamPoints" => "90",
        "opposingTeamPoints" => "89",
    ],
]
?>
<h2>1° GIORNATA DI CAMPIONATO</h2>
<?php
    foreach ($basket_matches as $match) {

        ?>

        <div>
            <p><?= $match["homeTeam"] ?> - <?= $match["opposingTeam"] ?> | <?= $match["homeTeamPoints"] ?> - <?= $match["opposingTeamPoints"] ?></p>

        </div>
        <?php
    }
    ?>


        
                