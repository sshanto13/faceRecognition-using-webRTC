<?php
include 'server.php'; 


     $encode_value = filter_user_data($_POST['encode_value']);  
     $person_id = filter_user_data($_POST["person_id"]);    
     $encode_status = 1;
     $checked = 0;

        $sql = "INSERT INTO faceendcode ( encode_value, person_id, encode_status, checked ) 
            VALUES ('$encode_value', '$person_id', '$encode_status', '$checked')"; 


      if (mysqli_query($db, $sql)) {
        
          $update_user_to_registered_done = "UPDATE user SET  registered='1' where person_id='$person_id'"; 

          echo mysqli_query($db, $update_user_to_registered_done) ?   '{"result" : "data inserted"}' : '';

      } else{
        echo '{"result" : "data not inserted"}' .;
      }

 
 

