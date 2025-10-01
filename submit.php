<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Sveiks, <?php echo $_POST["name"]; ?> jūsu apraksts veiksmīgi tika aizsūtīts! <br>
    <a href="/index.html">Atpakaļ uz Apraksta izveidi</a> <br>
    <a href="/list.php">Uz uz Atsauces sadaļu</a> <br>
</body>

</html>

<?php


$name = $_POST["name"];
$surname = $_POST["surname"];
$booktitle = $_POST["title"];
$desc = $_POST["description"];
$level = $_POST["level"];
$fullname->getFullName($name, $surname);
$servername = "localhost";
$username = "book_review_user_01102025";
$password = "password";
$tablename = "book_review";
$dbname = "book_review_01102025";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "INSERT INTO $tablename (full_name, book_title, review_text, rating)
VALUES ('$fullname', '$booktitle', '$desc', '$level')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>