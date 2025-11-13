#!/usr/bin/env php
<?php

$host = 'localhost';
$db   = 'sfp1';
$user = 'postgres';
$pass = 'test';
$port = 5432;

// Connexion PostgreSQL
$conn_string = "host=$host port=$port dbname=$db user=$user password=$pass";
$connect = pg_connect($conn_string);

if (!$connect) {
    echo "Error: Unable to connect to the database.\n";
    exit;
} else {
    echo "Connection ok!\n";
}

$table_query = "
CREATE TABLE IF NOT EXISTS utilisateurs (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
";

$result = pg_query($connect, $table_query);

if (!$result) {
    echo "Erreur lors de la création de la table.\n";
    exit;
} else {
    echo "Table vérifiée/créée.\n";
}

$nom = 'Pierre';
$email = 'p@example.com';

$insert_query = "INSERT INTO utilisateurs (nom, email) VALUES ($1, $2)";
$result = pg_query_params($connect, $insert_query, [$nom, $email]);

if (!$result) {
    echo "Erreur lors de l'insertion de la ligne.\n";
} else {
    echo "Ligne insérée avec succès.\n";
}

?>
