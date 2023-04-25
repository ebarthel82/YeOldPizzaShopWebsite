<?php
$Name = $_POST["name"];
$Email = $_POST["email"];
$Rating = $_POST["recommend"];
$Suggestion = $_POST["comment"];

$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "PizzaWebsite";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "INSERT INTO survey (Name, Email, Rating, Suggestions) VALUES ('$Name', '$Email', '$Rating', '$Suggestion')";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssss", $Name, $Email, $Rating, $Suggestion);
mysqli_stmt_execute($stmt);

header("location:index.html");
?>