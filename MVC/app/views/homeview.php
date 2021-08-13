<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<p>Home View</p>

<?php

require '../app/core/view.php';

class homeview extends view{

        function __construct(){
            
            
        }
    
        public function render($viewName, $data = []){
            //print_r($data);
    
            

            if ($data->num_rows > 0) {
                // output data of each row
                while($row = $data->fetch_assoc()) {
                  echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["address"]. "<br>";
                }
              } else {
                echo "0 results";
              }
            
        }
    
    }
  ?>



</body>
</html>

