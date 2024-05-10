<?php
// Connect to PostgreSQL
$host = $_ENV['DB_HOST'];
$dbname = $_ENV['DB_NAME'];
$username = $_ENV['DB_USER'];
$password = $_ENV['DB_PASSWORD'];
$conn = new PDO("pgsql:host=$host;dbname=$dbname", $username, $password);

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pseudonyme = htmlspecialchars($_POST['pseudonyme']);
    $message = htmlspecialchars($_POST['message']);
    $client_ip = htmlspecialchars($_POST['client_ip']);

    // Insert message into database
    $stmt = $conn->prepare("INSERT INTO blog (pseudonyme, message, client_ip) VALUES (:pseudonyme, :message, :client_ip)");
    $stmt->bindParam(':pseudonyme', $pseudonyme);
    $stmt->bindParam(':message', $message);
    $stmt->bindParam(':client_ip', $client_ip);
    $stmt->execute();
}

// Redirect back to the index page
header("Location: /");
exit;
?>

