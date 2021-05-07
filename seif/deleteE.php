<?php  

if(isset($_GET['code'])){
   include "db_conn.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$code = validate($_GET['code']);

	$sql = "DELETE FROM evenement
	        WHERE code=$code";
   $result = mysqli_query($conn, $sql);
   if ($result) {
   	  header("Location: afficherE.php?success=successfully deleted");
   }else {
      header("Location: afficherE.php?error=unknown error occurred&$user_data");
   }

}else {
	header("Location: afficherE.php");
}