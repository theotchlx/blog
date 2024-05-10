<?php
// Connect to PostgreSQL
$host = $_ENV['DB_HOST'];
$dbname = $_ENV['DB_NAME'];
$username = $_ENV['DB_USER'];
$password = $_ENV['DB_PASSWORD'];
$conn = new PDO("pgsql:host=$host;dbname=$dbname", $username, $password);

// Retrieve messages from the database
$stmt = $conn->query("SELECT * FROM blog ORDER BY id DESC");
$blogs = $stmt->fetchAll();

// Display messages
foreach ($blogs as $blog) {
    // Format timestamp
    $timestamp = date('Y-m-d H:i:s', strtotime($blog['created_at']));

    echo "<div class='blog-entry'>";
    echo "<strong>{$blog['pseudonyme']}</strong> (IP: {$blog['client_ip']})";
    echo "<div style='float:right;'><small>{$timestamp}</small></div><br>";
    echo "{$blog['message']}";
    echo "</div>";
}
?>

