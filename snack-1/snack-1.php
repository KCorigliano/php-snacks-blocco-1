<?php

$matchArray = [
    [
        'teamCasa' => [
            'nome' => 'team-1',
            'punti' => '36',
        ],    
        'teamOspite' => [
            'nome' => 'team-2',  
            'punti' => '15'
        ]
    ],
    [
        'teamCasa' => [
            'nome' => 'team-3',
            'punti' => '34',
        ],    
        'teamOspite' => [
            'nome' => 'team-4',  
            'punti' => '35'
        ]
    ],
    [
        'teamCasa' => [
            'nome' => 'team-5',
            'punti' => '12',
        ],    
        'teamOspite' => [
            'nome' => 'team-6',  
            'punti' => '8'
        ]
    ],
    [
        'teamCasa' => [
            'nome' => 'team-7',
            'punti' => '55',
        ],    
        'teamOspite' => [
            'nome' => 'team-8',  
            'punti' => '24'
        ]
    ],
    [
        'teamCasa' => [
            'nome' => 'team-9',
            'punti' => '29',
        ],    
        'teamOspite' => [
            'nome' => 'team-10',  
            'punti' => '14'
        ]
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container">
        <h3>Calendario della 25° giornata di campionato</h3>
        <?php
            foreach ($matchArray as $key => $result) {
                echo "<div class=\"match\">" . 
                        "<p>Match $key</p>".
                        "<div class=\"row\">".
                            "<div>".
                                "<p>" . $result['teamCasa']['nome'] . "</p>" .
                                "<p>Punti: " . $result['teamCasa']['punti'] . "</p>" .
                            "</div>".
                            "<span> vs </span>" .
                            "<div>".
                                "<p>" . $result['teamOspite']['nome'] . "</p>" .
                                "<p>Punti: " . $result['teamOspite']['punti'] . "</p>" .
                            "</div>".
                        "</div>".
                    "</div>";
            }

        ?>
    </div>

</body>
</html>