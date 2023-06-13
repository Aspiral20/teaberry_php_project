<?php

//Variabile Externe/Constante Externe - cu litere mari
//Variabile Interne - cu litere mici

//Constante care trebuiesc pentru ai da parametrii Class-ului mysqli
const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASSWORD = '';
const DB_NAME = 'teaberry';

//Cream un obiect nou, class-ului mysqli (bazei de date)
$MYSQL = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

if ($MYSQL->connect_errno) {
    error_log("No connection to DB, error: $MYSQL->connect_errno");
}

//Array cu toate tabelele bazei de date
$_tables = array (
    'whitetea',
    'blacktea',
    'greentea',
    'mixes',
    'oolong'
);

$id_table = 0;

//Indeplinim comanda SQL din baza de date teaberry
while ($id_table < count($_tables)) {
    $DB_CONTENT[] = mysqli_query($MYSQL, "SELECT * FROM `$_tables[$id_table]` where quantity = 100");
//  Afisare Bazei de date
    echo "<h1>". ($id_table+1) . " TABLE </h1>";
    echo "<p></p>";

    $id_table++;
}

$MYSQL->close();
?>