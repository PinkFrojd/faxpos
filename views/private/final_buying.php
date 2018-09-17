<?php

/*

Dodat filter po broju racuna

(Mozda dodat filtriranje prema konobaru)

 */

$items = explode(",", $_GET["items"]);
$konobar = $_GET["konobar"];
$ukupno = $_GET["ukupno"];

include './constants.php';

$conn = mysqli_connect(SERVER_NAME, USERNAME, PASSWORD, DB_NAME);

if (!$conn) {
    die("Could not connect to DB");
}

$result = mysqli_query($conn, "SELECT Broj_racuna FROM `racuni` ORDER BY idracuni DESC LIMIT 1");

$row = mysqli_fetch_row($result);

$last_id = $row[0];

mysqli_free_result($result);

$last_id += 1;

$sql = "";

foreach ($items as $item) {
    $sql .= "INSERT INTO racuni (Broj_racuna , Naziv_konobara, Naziv_artikla, ukupnaZarada)
        VALUES ($last_id, '$konobar', '$item', '$ukupno');";
}

if (mysqli_multi_query($conn, $sql)) {
    header("Location: ./dashboard.php");
} else {
    echo "Error: " . $sql . "<br>";
}

mysqli_close($conn);
