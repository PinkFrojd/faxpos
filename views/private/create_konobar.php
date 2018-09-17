<?php

include 'constants.php';

$imeKonobara = $_POST["imeKonobara"];
$sifraKonobara = $_POST["sifraKonobara"];
$godineKonobara = $_POST["godineKonobara"];

$conn = mysqli_connect(SERVER_NAME, USERNAME, PASSWORD, DB_NAME);

if (!$conn) {
    die("Could not connect");
}

$sql = "INSERT INTO konobari (Ime, Password, Godine)
    VALUES ('$imeKonobara', '$sifraKonobara', '$godineKonobara')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header("Location: ./admin_page.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
