<?php 
    require 'database.php';
    
    use Database;
   /* // get database connection
    

    echo 'Hello World1',"\n"; 

    
    
    //$db = $database->getConnection();
*/
    try {
        
        $database = new Database();
        $database->getConnection();

        $database->getAll();
    } catch (Exception $e) {
        echo 'Excepción capturada ';
    }
 ?> 
