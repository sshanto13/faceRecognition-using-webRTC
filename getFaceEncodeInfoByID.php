<?php

     header("Access-Control-Allow-Origin: *");
     header("Content-Type: application/json; charset=UTF-8");
     include"server.php";


     if(isset($_GET["person_id"])){

      $person_id =filter_user_data($_GET["person_id"]);

      $sql = "SELECT * FROM faceendcode where person_id in (" . $person_id .")";
      print_r($sql) ;  
        $result = mysqli_query($db, $sql);

             if (mysqli_num_rows($result) > 0) {
                    $rows =array();
                    while ($r = mysqli_fetch_assoc($result)) {
                        $rows[] = $r;
                    }
                     echo json_encode($rows);
                } 
                else{
                    echo ("person id not found in the table");
            }    
}
else {
        echo ("Please insert your person id.");
}
