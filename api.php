<?php 
 header('content-type:application.json');
 $request = $_SERVER['REQUEST_METHOD'];

 switch ( $request) {
 	case 'GET':
 	    getmethod();
    break;	
    case 'PUT':
      $data = json_decode(file_get_contents('php://input'), true);
 	   putmethod($data);
    break;
 	case 'POST':
       $data = json_decode(file_get_contents('php://input'), true);
 	   postmethod($data);

 	break;
 	case 'DELETE':
 	    $data = json_decode(file_get_contents('php://input'), true);
 	    deletemethod($data);
 	break;
 	default:
 		echo '{"name" : "data not found" }';
 		break;
}

//data read part
function getmethod(){
 	 include"db.php";
     $sql = "SELECT * FROM webianpeople";
     $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows( $result) >0) {
		    $rows =array();
		    while ($r = mysqli_fetch_assoc($result)) {
		      	$rows['result'][] = $r;
		    }
		echo json_encode($rows);
        } 
    else{
        echo '{"result" : "no data found here"}';
    }
 	
 }
 
//data insert part
 function postmethod($data){
      include"db.php";
      $name= $data["name"];
      $email=$data["email"];

      $sql = "INSERT INTO webianpeople(name, email, created_at) VALUES ('$name','$email', NOW() )";
      if (mysqli_query($conn, $sql)) {
      	echo '{"result" : "data inserted"}';
      } else{
      	echo '{"result" : "data not inserted"}';
      }

 }


//data update part
 function putmethod( $data){
 	 include"db.php";
 	 $id =$data["id"];
     $name= $data["name"];
     $email=$data["email"];

      $sql = "UPDATE webianpeople SET name='$name', email='email', created_at=NOW() where id='$id'";
      if (mysqli_query($conn, $sql)) {
      	echo '{"result" : "data updated"}';
      } else{
      	echo '{"result" : "data not updated"}';
      }

 }
 //delete data part
  function deletemethod( $data){
 	 include"db.php";
 	 $id =$data["id"];
    
      $sql = "DELETE FROM webianpeople where id=$id";
      if (mysqli_query($conn, $sql)) {
      	echo '{"result" : "data deleted"}';
      } else{
      	echo '{"result" : "data not deleted"}';
      }

 }



 ?>