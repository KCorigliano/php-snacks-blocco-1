<?php

$randomNum = [];

while (count($randomNum)<15) { 
    $num = rand(1, 100);
    if (!in_array($num, $randomNum)) {
        $randomNum[] = $num;
    }
};

foreach ($randomNum as $key => $result) {
    echo "<p><span style=font-weight:bold>-$key</span> $result </p>";
}

?>