<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('159.89.47.44', 'aballouc_HW3User', 'KtfI@Dp2lLue', 'aballouc_HW3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
