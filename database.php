<?php
  include 'env.php'; // includiamo i dati "segreti"

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn && $conn->connect_error) { // se non c e connessione allora DIE
    echo 'Errore di connessione ' . $conn->connect_error; die();
  }

  $sql = "SELECT * FROM `stanze`"; // selezioniamo le stanze
  $result = $conn->query($sql); // assegniamo a result la nostra variabile sql

  if($result && $result->num_rows > 0) { // se dentro result abbiamo delle rows cioè è maggiore di 0 allora proseguiamo
    $rooms = [];
    while ($row = $result->fetch_assoc()) { // cicliamo i dati
      // echo 'ID' . $row['id'] . ' - Floor: ' . $row['floor'];
      $rooms[] = $row; // li pushiamo dentro l array rooms
    }
  }
  elseif ($result) { //  nessun risultato
    echo 'No results';
  }
  else { // un errore
    echo 'Query error';
  }

  $conn->close(); // chiudiamo la connessione
