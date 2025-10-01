<?php

$servername = "localhost";
$username = "book_review_user_01102025";
$password = "password";
$tablename = "book_review";
$dbname = "book_review_01102025";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully" . "<br>";




$sql = "SELECT full_name, book_title, review_text, rating FROM $tablename";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        $rating = $row["rating"];
        $rating_txt = "";
        if ($rating = 1) {
            $rating_txt = "Nelasāmi";
        }
        if ($rating = 2) {
            $rating_txt = "Slikti";
        }
        if ($rating = 3) {
            $rating_txt = "Viduvēja";
        }
        if ($rating = 4) {
            $rating_txt = "Labi";
        }
        if ($rating = 5) {
            $rating_txt = "Lieliska";
        }
        echo "<li>" . $row["full_name"] . $row["book_title"] . $row["review_text"] . "   " . $rating_txt . "<br>";
    }
    echo "</ul>";
} else {
    echo "0 results";
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="/index.html">Atpakaļ uz Apraksta izveidi</a> <br>
</body>

</html>