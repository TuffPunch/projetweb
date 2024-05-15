<?php
// Define error message (optional)
session_start();
$errorMessage = "";

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get username and password from the form
  $username = trim(htmlspecialchars($_POST['username']));
  $password = trim($_POST['password']);

  // Validate username and password (replace with your validation logic)
  if (empty($username) || empty($password)) {
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
      $sql = "SELECT * FROM users WHERE username = :username";
      $stmt = $conn->prepare($sql);
      $stmt->bindValue(':username', $username, PDO::PARAM_STR);

      // Execute the query
      $stmt->execute();

      // Check if a user with the provided username exists
      $user = $stmt->fetch(PDO::FETCH_ASSOC);
        $debug = $user;
      if ($user) {
        // Verify password using password hashing (replace with your hashing function)
        if ($password == $user['password']) {
          // Login successful
          $_SESSION['user_logged_in'] = true;
          $_SESSION['username'] = $username;
          // Redirect to hello page
          header("Location: /projetweb/adminpanel/adminpanel.php");
        } else {
          $errorMessage = "Invalid username or password.";
          $_SESSION['login_failed'] = true;
          $_SESSION['error_message'] = $errorMessage; 
          header("Location: /projetweb/connexion/connexion.php");
        }
      } else {
        $errorMessage = "Invalid username or password.";
        $_SESSION['login_failed'] = true;
        $_SESSION['error_message'] = $errorMessage; 
        header("Location: /projetweb/connexion/connexion.php");
      }

    } catch(PDOException $e) {
      $errorMessage = "Error: " . $e->getMessage();
    }

    $conn = null;  // Close the database connection
  }


?>

