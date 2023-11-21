<?php
$host = "localhost";
$dbname = "inventory";
$username = "root";
$password = "";


try {
    $conn = mysqli_connect(hostname: $host, username: $username, password: $password, database: $dbname);
} catch (mysqli_sql_exception $e) {
    echo "Could Not Connect to Server, Please contact ADMIN";
}


if (isset($_POST['save_select'])) {
    $partnumber = $_POST['partnumber'];
    $name = $_POST['name'];
    $category = $_POST['category'];
    $amt = $_POST['amount'];
    $date = $_POST['date'];
}


$query = "INSERT INTO invendata (partnumber, name, category, amount, date) VALUES ('$partnumber', '$name', '$category', '$amt', '$date')";
$query_run = mysqli_query($conn, $query);



if (mysqli_connect_errno()) {
    die("Connection Error: " . mysqli_connect_error());
}

$conn->close();

echo "Record has been saved";
