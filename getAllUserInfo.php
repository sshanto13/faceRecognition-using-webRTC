<?php
 	 include"server.php";
     $sql = "SELECT * FROM user";
     $result = mysqli_query($db, $sql);
    if (mysqli_num_rows( $result) >0) {
		    $rows =array();
		    while ($r = mysqli_fetch_assoc($result)) {
		      	$rows[] = $r;
		    }
		echo json_encode($rows);
        } 
    else{
        echo '{"no data found here"}';
}

