<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('138.68.62.201', 'amezaouc_hw3','h2AC-+QJ{C%4', 'amezaouc_homework3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
