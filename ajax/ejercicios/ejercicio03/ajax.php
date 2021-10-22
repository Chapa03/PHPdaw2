<?php 
$idioma = isset($_GET['idioma']) ? $_GET['idioma'] : 'es';
$BDetiquetas = [
    "es" => [
        "Palabra",
        "Traducción",
        "Enviar"
    ],
    "en" => [
        "Word",
        "Translation",
        "Send"
    ],
    "fr" => [
        "Mot",
        "Traduction",
        "Envoyer"
    ]
];
echo implode(':', $BDetiquetas[$idioma]);

?>