<?php

require '../app/core/model.php';

class user extends model{

    public $conn;

    function __construct(){
        
    }

    public function runQuery(){
        require '../app/core/database.php';
        $sql = "SELECT * FROM members";
        $result = $conn->query($sql);
        
        // if ($result->num_rows > 0) {
        //     // output data of each row
        //     while($row = $result->fetch_assoc()) {
        //       echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["address"]. "<br>";
        //     }
        //   } else {
        //     echo "0 results";
        //   }

          return $result;
    }

}