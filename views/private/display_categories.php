<?php

include './constants.php';

$conn = mysqli_connect(SERVER_NAME, USERNAME, PASSWORD, DB_NAME);

if (!$conn) {
    die("Could not connect to DB");
}

$sql = "SELECT DISTINCT Kategorija FROM artikli";

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    ?>

        <option><?php echo $row["Kategorija"]; ?></option>"

        <?php
}

mysqli_close($conn);

?>

