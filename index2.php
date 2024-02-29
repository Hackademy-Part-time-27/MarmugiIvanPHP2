<?php
function media_numeri_pari($array) {
    $somma_pari = 0;
    $conteggio_pari = 0;

    foreach ($array as $numero) {
        if ($numero % 2 === 0) {
            $somma_pari += $numero;
            $conteggio_pari++;
        }
    }

    if ($conteggio_pari === 0) {
        return 0;
    }

    return $somma_pari / $conteggio_pari;
}

// Utilizzo
$array_di_numeri = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$media = media_numeri_pari($array_di_numeri);
echo "La media dei numeri pari nell'array è: " . $media;
?>
