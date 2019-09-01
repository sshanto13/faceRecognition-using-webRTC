<?php
     include"server.php";
     if(isset($_POST["person_id"])){
        $person_id =$_POST["person_id"];
        $sql = "UPDATE user SET  registered='1' where person_id='$person_id'";
        if (mysqli_query($db, $sql)) {
          echo '{"updated successfully"}';
        } else{
          echo '{"Not updated"}' . mysqli_error($db);
        }
      } else {
        echo '{"please insert your person id." } '  . mysqli_error($db);;
}