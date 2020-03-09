<?php
  include __DIR__ . '/database.php'; // includiamo database
  include __DIR__ . '/functions.php'; // includiamo functions

  // $sql = "SELECT * FROM `stanze`";
  // $result = $conn->query($sql);

  // if ($result && $result->num_rows > 0) {
  //   $rooms = [];
  //   while ($row = $result->fetch_assoc()) {
  //     // echo 'ID' . $row['id'] . ' - Floor: ' . $row['floor'];
  //     $rooms[] = $row;
  //   }
  // } elseif ($result) {
  //   echo 'No results';
  // } else {
  //   echo 'Query error';
  // }

  // $conn->close();

  $results = getAll($conn, 'stanze'); // richiamiamo la funzione e gli passiamo le stanze
