<?php

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$password2 = $_POST["password2"];
$terms = filter_input(INPUT_POST, "terms", FILTER_VALIDATE_BOOL);


if (!$terms) {
    die("Terms must be accepted");
}
if ($name == "") {
    die("Name Must be Entered!");
}
if ($email == "") {
    die("Email must be Entered!");
}
if ($password == "") {
    die("Must Enter a Password");
}

//filter INT can be used for numbers

$host = "localhost";
$dbname = "db_register";
$username = "root";
$password = "";


$conn = mysqli_connect(hostname: $host, username: $username, password: $password, database: $dbname);


if (mysqli_connect_errno()) {
    die("Connection Error: " . mysqli_connect_error());
}

$sql = "INSERT INTO register(name, email, password, password2)
        VALUES (?,?,?,?)";

$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $password, $password2);

mysqli_stmt_execute($stmt);

echo "Record has been saved";
