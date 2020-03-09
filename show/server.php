<?php
  include __DIR__ . '/../database.php';
  include __DIR__ . '/../functions.php';

  if(empty($_GET['id'])) {
    die('ID non esistente');
  }

  $roomId = $_GET['id']; // prendiamo l id tramite un get

  $room = getById($conn, 'stanze', $roomId); // richiamo della funzione e come ho gia detto gli passiamo "stanze"
  // $sql = "SELECT * FROM `stanze` WHERE `id`='$roomId'";

  // $result = $conn->query($sql);

  // if($result && $result->num_rows > 0) {
  //   $room = $result->fetch_assoc();
  // }
  // elseif ($result) {
  //   echo 'No results';
  // }
  // else {
  //   echo 'Query error';
  // }

  // $conn->close();
