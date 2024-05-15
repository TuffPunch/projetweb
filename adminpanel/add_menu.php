<?php

session_start();
if (!(isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === true)) {
    header("Location: /projetweb/connexion/connexion.php");
}

$errorMessage = "";

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get username and password from the form
    $name = trim(htmlspecialchars($_POST['name']));

    // Validate username and password (replace with your validation logic)
    if (empty($name)) {
        $errorMessage = "Please enter both username and password.";
    }
    // Database connection details (replace with your actual credentials)
    $host = "localhost";
    $dbname = "coffee";
    $db_username = "root";
    $db_password = "";

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $db_username, $db_password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare a SQL statement to prevent SQL injection (use prepared statements)
        $sql = "INSERT INTO menu values (null, :name)";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':name', $name, PDO::PARAM_STR);

        // Execute the query
        $stmt->execute();
        header("Location: /projetweb/adminpanel/adminpanel.menu.php");
    } catch (PDOException $e) {
        $errorMessage = "Error: " . $e->getMessage();
    }

    $conn = null;  // Close the database connection
}


?>