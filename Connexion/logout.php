<?php

// Start the session
session_start();

// Destroy the session
session_destroy();


header('Location: /projetweb/acceuil/acceuil.php');

// Redirect to /accueim using relative URL (more common)
// header('Location: /accueim');

exit;

?>
