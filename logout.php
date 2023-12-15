<?php 

session_start();

session_unset();

session_destroy();

// Send a response indicating successful logout
echo json_encode(['status' => 1, 'message' => 'logout']);


?>