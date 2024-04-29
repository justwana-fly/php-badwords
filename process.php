<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process</title>
</head>
<body>
<?php
// Controlla se i dati sono stati inviati
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Controlla se entrambi i campi sono stati compilati
    if (isset($_POST['paragraph']) && isset($_POST['word'])) {
        // Recupera il paragrafo e la parola da censurare
        $paragraph = $_POST['paragraph'];
        $word = $_POST['word'];

        // Controlla se il paragrafo è vuoto
        if (empty(trim($paragraph))) {
            echo "<p>Errore: Non hai inserito nessun testo nel paragrafo.</p>";
        } else {
            // Stampa il paragrafo e la sua lunghezza
            echo "<p>Paragrafo: $paragraph</p>";
            echo "<p>Lunghezza del paragrafo: " . strlen($paragraph) . "</p>";

            // Sostituisci tutte le occorrenze della parola da censurare con ***
            $censored_paragraph = str_ireplace($word, '***', $paragraph);

            // Stampa di nuovo il paragrafo censurato e la sua lunghezza
            echo "<p>Paragrafo censurato: $censored_paragraph</p>";
            echo "<p>Lunghezza del paragrafo censurato: " . strlen($censored_paragraph) . "</p>";
        }
    } else {
        echo "<p>Errore: Assicurati di compilare entrambi i campi.</p>";
    }
}
?>
</body>
</html>

