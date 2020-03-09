<?php
// è la stessa cosa che abbiamo scritto in server ma dentro una funzione... prima facciamo una select al db, "table" è il paramentro che ci interessa potrebbe essere stanze ecc... e poi pushamo le row dentro una variabile
function getAll($conn, $table) {

  $sql = "SELECT * FROM `$table`";
  $result = $conn->query($sql);

  if ($result && $result->num_rows > 0) {
    $results = [];
    while ($row = $result->fetch_assoc()) {
      $results[] = $row;
    }
  } elseif ($result) {
    $results = [];
  } else {
    $results = false;
  }

  return $results;
}

function getById($conn, $table, $id) {
  $sql = "SELECT * FROM `$table` WHERE `id`='$id'";

  $resultQuery = $conn->query($sql);

  if ($resultQuery && $resultQuery->num_rows > 0) {
    $result = $resultQuery->fetch_assoc();
  } elseif ($result) {
    $result = [];
  } else {
    $result = false;
  }


  return $result;
}
