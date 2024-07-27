<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "4th project"; 
$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

function redirect($url, $message) {
    echo "<script type='text/javascript'>alert('$message'); window.location.href='$url';</script>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $departure_date = $_POST["departure-date"];
    $return_date = $_POST["return-date"];

    $stmt = $conn->prepare("INSERT INTO bookings (name, email, departure_date, return_date) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $departure_date, $return_date);

    if ($stmt->execute()) {
        redirect('payment.php', 'Select your payment method');
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();

?>
