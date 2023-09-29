<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once("db.php"); // Include the database connection file
    $db = new Database();
    $conn = $db->connect();

    echo "Script is executed.";

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash the password
    $comments = $_POST["comments"];

    echo "Name: " . $name;
    echo "Email: " . $email;

    $db->insertPersons($name, $email, $phone, $password, $comments);

    // Redirect to a success page
    header("Location: success.php");
    exit();
} else {
    header("Location: index.html"); 
    exit();
}
?>
