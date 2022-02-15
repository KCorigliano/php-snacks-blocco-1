<?php

$postArray = [
    '05-04-2022' => [
        'post' => 'bella casa'
    ],
    '06-04-2022' => [
        'post' => 'bella macchina'
    ],
    '07-04-2022' => [
        'post' => 'bella piscina'
    ],
    '08-04-2022' => [
        'post' => 'bella bicicletta'
    ],
    '09-04-2022' => [
        'post' => 'bel tempo'
    ],
];
$counter = 0;

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
        <?php
            foreach ($postArray as $key => $result) {
                echo "<div class=\"post\">" . 
                        "<div>".
                            "<h3>Post " . ($counter++) . "</h3>" .
                            "<p>" . $key . "</p>" .
                            "<p>" . $result['post'] . "</p>" .
                        "</div>".
                    "</div>";
            }

        ?>
    </div>

</body>
</html>