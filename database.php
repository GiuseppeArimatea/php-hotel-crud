<?php
  include_once 'env.php';

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn && $conn->connect_error) {
    echo 'Errore di connessione ' . $conn->connect_error; die();
  }

  // creiamo la connessione al db, se non va ci restituisce errore di connessione
