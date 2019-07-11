<?php
// include database and object files
include_once '../config/database.php';

// get database connection
$database = new Database();
$db = $database->getConnection();
echo("<script>console.log('success');</script>");

?>