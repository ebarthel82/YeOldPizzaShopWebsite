<?php
$type = $_POST["question1"];
$flavor = $_POST["question2"];

$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "PizzaWebsite";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "INSERT INTO transaction (MOR, FLAVOR) VALUES ('$type', '$flavor')";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ss", $type, $flavor);
mysqli_stmt_execute($stmt);

header("location:rate.html")
?>