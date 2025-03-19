<?php

// Retrieve data from the callback request
$TransactionDesc = $_POST['TransactionID']; // Assuming TransactionID is one of the parameters sent in the callback
$Amount = $_POST['Amount']; // Assuming Amount is another parameter sent in the callback

// Database connection credentials
$dbHost = 'db4free.net';     // Replace with your actual database host (e.g., localhost or db4free.net)
$dbUsername = 'shilambilashaban'; // Replace with your actual database username
$dbPassword = 'shilambilashaban'; // Replace with your actual database password
$dbName = 'shilambilashaban';     // Replace with your actual database name

// Create a new PDO instance for database connection
try {
    $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUsername, $dbPassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Prepare and execute SQL query to insert data into the "pay" table
try {
    $stmt = $pdo->prepare("INSERT INTO pay (transaction_id, amount) VALUES (:transactionId, :amount)");
    $stmt->bindParam(':transactionId', $transactionId);
    $stmt->bindParam(':amount', doubleval($amount));
    if ($stmt->execute()) {
        echo "Data inserted successfully.";
        http_response_code(200); // Send HTTP response code 200 - OK to Safaricom API as acknowledgement of successful processing.
    } else {
        echo "Failed to insert data.";
        http_response_code(500); // Send HTTP response code 500 - Internal Server Error to Safaricom API indicating failure.
    }
} catch (PDOException $e) {
   echo "Error: " . e.getMessage();
   http_response_code(500); // Send HTTP response code 500 - Internal Server Error to Safaricom API indicating failure.
}
?>