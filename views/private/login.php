<?php

include './constants.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $conn = mysqli_connect(SERVER_NAME, USERNAME, PASSWORD,
        DB_NAME);

    $username = stripslashes($username);
    $password = stripslashes($password);
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    if (!$conn) {
        die("Could not connect to db");
    }

    $sql = "SELECT * FROM konobari ";
    $sql .= "WHERE ime='$username' AND password='$password'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {

        $_SESSION["username"] = $username;

        if ($_SESSION["username"] == "admin") {
            header("Location: ./admin_page.php");
        } else {
            header("Location: ./dashboard.php");
        }

    } else {
        header("Location: ./index.php");
    }

    mysqli_close($conn);

}
