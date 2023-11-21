<?php
$host = "localhost";
$dbname = "fiber_table";
$username = "root";
$password = "";


try {
    $conn = mysqli_connect(hostname: $host, username: $username, password: $password, database: $dbname);
} catch (mysqli_sql_exception $e) {
    echo "Could Not Connect to Server, Please contact ADMIN";
}


if (isset($_POST['save_select'])) {
    $length = $_POST['length'];
    $type = $_POST['type'];
    $amt = $_POST['amount'];
}


$query = "INSERT INTO fiber_table (length, type, amount) VALUES ('$length', '$type', '$amt')";
$query_run = mysqli_query($conn, $query);



if (mysqli_connect_errno()) {
    die("Connection Error: " . mysqli_connect_error());
}

$conn->close();

echo "Record has been saved";
