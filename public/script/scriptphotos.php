#!/usr/bin/env php
<?php
// script angel

// Chemin relatif vers le fichier source
$source = __DIR__ . '\\..\\..\\..\\sfp_per1\\img.jpeg';

// Chemin relatif vers le fichier de destination
$dest = __DIR__ . '\\..\\..\\public\\photo\\imgtest.jpeg';

// Lire le fichier source
$data = file_get_contents($source);
if ($data === false) {
    die("Erreur : impossible de lire le fichier source $source\n");
}

// Écrit le fichier dans la destination
if (file_put_contents($dest, $data) === false) {
    die("Erreur : impossible d’écrire le fichier $dest\n");
}

echo "Fichier copié avec succès : $dest\n";
?>
