
<?php
include __DIR__ . '/../env.php'; // includiamo sempre i nostri dati segreti

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn && $conn->connect_error) { // e controlliamo che la connessione funziona
  echo 'Errore di connessione ' . $conn->connect_error;
  die();
}
