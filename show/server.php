<?php
  include 'database.php';

  $idRoom = $_GET['id']; // prendiamo l ID tramite GET

  $sql = "SELECT * FROM `stanze` WHERE `id` =  $idRoom"; // selezioniamo tramite il where id = idROOM
  $result = $conn->query($sql);

  if ($result && $result->num_rows > 0) { // controlli
    $room = $result->fetch_assoc(); //  assegniamo a room i risultati della variabile result
  } elseif ($result) {
    echo 'No results';
  } else {
    echo 'Query error';
  }

  $conn->close();
