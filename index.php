<?php
for ($numero = 1; $numero <= 100; $numero++) {
    if ($numero % 3 == 0 && $numero % 5 == 0) {
        echo "HACKADEMY\n";
    } elseif ($numero % 3 == 0) {
        echo "PHP\n";
    } elseif ($numero % 5 == 0) {
        echo "JAVASCRIPT\n";
    } else {
        echo $numero."\n";
    }
}
?>
