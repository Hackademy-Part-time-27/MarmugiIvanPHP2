<?php
$utenti = [
    ["nome" => "Mario", "cognome" => "Rossi", "genere" => "M"],
    ["nome" => "Maria", "cognome" => "Bianchi", "genere" => "F"],
    ["nome" => "Luigi", "cognome" => "Verdi", "genere" => "M"],
    ["nome" => "Giulia", "cognome" => "Neri", "genere" => "F"],
    ["nome" => "Giovanni", "cognome" => "Gialli", "genere" => "M"]
];

foreach ($utenti as $utente) {
    if ($utente["genere"] === "M") {
        echo "Buongiorno Signor " . $utente["nome"] . " " . $utente["cognome"] . "\n";
    } elseif ($utente["genere"] === "F") {
        echo "Buongiorno Signora " . $utente["nome"] . " " . $utente["cognome"] . "\n";
    } else {
        echo "Buongiorno " . $utente["nome"] . " " . $utente["cognome"] . "\n";
    }
}
?>