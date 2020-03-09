<?php
include __DIR__ . '/../database.php';
include __DIR__ . '/../functions.php';

$results = getAll($conn, 'prenotazioni'); // richiamiamo la funzione e gli passiamo prenotazioni

if(!$results) {
  die('error');
}

$conn->close();
