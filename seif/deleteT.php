<?php  

if(isset($_GET['codeC'])){
   include "db_conn.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$codeC = validate($_GET['codeC']);

	$sql = "DELETE FROM ticket
	        WHERE codeC=$codeC";
   $result = mysqli_query($conn, $sql);
   if ($result) {
   	  header("Location: afficheT.php?success=successfully deleted");
   }else {
      header("Location: afficheT.php?error=unknown error occurred&$user_data");
   }

}else {
	header("Location: afficheT.php");
}