<?php
  include __DIR__ . '/../database.php';
  include __DIR__ . '/../functions.php';

  if(empty($_POST['id'])) {
    die('Id non corretto');
  }

  $roomId = $_POST['id'];

  // //controlliamo che l'id esiste
  // $sql = "SELECT * FROM `stanze` WHERE `id`='$roomId'";

  // $result = $conn->query($sql);
  $result = getById($conn, 'stanze', $roomId); // richiamo alla funzione

  if (!$result) {
    die('Id non corretto');
  }

  //se esiste facciamo il delete
  $sql = "DELETE FROM `stanze` WHERE `id` =  '$roomId'"; // query sql per il delete

  $resultDelete = $conn->query($sql);

  if($resultDelete) {
  // echo 'OK';
    header("Location: $basePath?roomNumber=$roomId");
  } else {
    echo 'KO';
  }

  $conn->close();
