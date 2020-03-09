<?php
include 'server.php'; // includiamo il server
include 'partials/header.php'; // includiamo l header
?>
<!-- applichiamo un if, se prendiamo tramite il get il roomNumber facciamo comparire un messaggio che ci dice che abbiamo cancellato la stanza N -->
<?php if (!empty($_GET['roomNumber'])) { ?>
  <div class="alert alert-danger">
    Hai cancellato la stanza id : <?php echo $_GET['roomNumber'] ?>
  </div>
<?php } ?>

<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Tutte le stanze</h1>
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Room Number</th>
            <th>Floor</th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php
          if (!empty($results)) { // cicliamo con un foreach e stampiamo tramite i echo i campi che vogliamo
            foreach ($results as $room) { ?>
              <tr>
                <td><?php echo $room['id'] ?></td>
                <td><?php echo $room['room_number'] ?></td>
                <td><?php echo $room['floor'] ?></td>
                <!--  prendiamo tramite l id la stanza che ci interessa e apriamo show -->
                <td><a href="show/show.php?id=<?php echo $room['id'] ?>">VIEW</a></td>
                <!--  prendiamo tramite l id la stanza che ci interessa e apriamo update -->
                <td><a href="update/update.php?id=<?php echo $room['id'] ?>">UPDATE</a></td>
                <td>
                  <!--  prendiamo tramite l id la stanza che ci interessa e apriamo delete -->
                  <form action="delete/server.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $room['id'] ?>">
                    <input class="btn btn-danger" type="submit" value="DELETE">
                  </form>

                </td>
              </tr>
          <?php }
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php include 'partials/footer.php'; ?>
<!-- includiamo il footer -->
