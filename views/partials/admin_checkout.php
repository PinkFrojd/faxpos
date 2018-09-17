<?php

include 'constants.php';

$conn = mysqli_connect(SERVER_NAME, USERNAME, PASSWORD, DB_NAME);

if (!$conn) {
    die("Could not connect");
}

$sql = "SELECT * FROM racuni ORDER BY Broj_racuna";

$result = mysqli_query($conn, $sql);

?>

    <div class="row">
        <div class="col"></div>
        <div class="col">
            <table class="table table-hover" id="myTable">
              <thead>
                <tr>
                  <th scope="col">Broj Racuna</th>
                  <th scope="col">Konobar</th>
                  <th scope="col">Prodani artikal</th>
                  <th scope="col">Ukupna Zarada</th>
                </tr>
              </thead>
              <tbody>

    <?php

while ($row = mysqli_fetch_assoc($result)) {

    ?>



                    <tr>
                      <th scope="row"><?php echo $row["Broj_racuna"] ?></th>
                      <td><?php echo $row["Naziv_konobara"] ?></td>
                      <td><?php echo $row["Naziv_artikla"] ?></td>
                      <td><?php echo $row["ukupnaZarada"] ?></td>
                    </tr>





    <?php
}

?>

            </tbody>
        </table>
    </div>
    <div class="col"></div>
</div>

    <?php
mysqli_close($conn);

?>



