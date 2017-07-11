<?php

echo "<ul><li>2</li>";

for ($j = 3; $j <= 100; $j++){
    for ($i = 2; $i <= floor(sqrt($j)); $i++) {
        if ($j % $i == 0) {
            continue 2;
        }
    }
    echo "<li>{$j}</li>";
}

echo "</ul>";
