<?php

include 'constants.php';

$nazivAritkla = $_POST["nazivAritkla"];
$kategorijaAritkla = $_POST["kategorijaAritkla"];
$cijenaAritkla = $_POST["cijenaAritkla"];
$slikaAritkla = $_POST["slikaAritkla"];

$conn = mysqli_connect(SERVER_NAME, USERNAME, PASSWORD, DB_NAME);

if (!$conn) {
    die("Could not connect");
}

$sql = "INSERT INTO artikli (Naziv, Kategorija, Cijena, Slika)
    VALUES ('$nazivAritkla', '$kategorijaAritkla', '$cijenaAritkla', '$slikaAritkla')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header("Location: ./admin_page.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
