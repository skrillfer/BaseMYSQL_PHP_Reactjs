<?php
    class Database{
    
        // specify your own database credentials
        private $host = "35.193.89.234";
        private $db_name = "trafficTwitterDB";
        private $username = "root";
        private $password = "Alexandria.2601";
        public $conn;
    
        // get the database connection
        public function getConnection(){

            $this->conn = null;
    
            try{
                $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
                $this->conn->exec("set names utf8");
            }catch(PDOException $exception){
                echo "Connection error: " . $exception->getMessage();
            }
    
            return $this->conn;
        }

        public function getAll()
        {
            
             // select all query
            $query = 'SELECT * FROM binnacle';
            // prepare query statement
            $stmt = $this->conn->prepare($query);
            // execute query
            $stmt->execute();
            $html="<table>";
            foreach ($stmt as $row) {
                $html = $html . "<tr>" . "<td>" .$row["name"] . "</td>"."<td>" . $row["user"] . "</td>" . "</tr>";
            }
            $html = $html . "</table>";
            print $html;
            return $stmt;
        }
    }
?>