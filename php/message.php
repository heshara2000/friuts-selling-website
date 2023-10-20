<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'fruits_store';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Name = $_POST['Name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO messages (Name, email, message) VALUES ('$Name', '$email', '$message')";

    $query = "SELECT * FROM messages";
    $result = mysqli_query($conn, $query);
    
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Name: " . $row['name'] . "<br>";
            echo "Email: " . $row['email'] . "<br>";
            echo "Message: " . $row['message'] . "<br><br>";
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }




    if ($conn->query($sql) === TRUE) {
        echo "Message sent successfully!";
       
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
