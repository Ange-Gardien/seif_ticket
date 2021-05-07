<?php 

if (isset($_POST['createE'])) {
	include "db_conn.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$code = validate($_POST['code']);
	$date = validate($_POST['date']);
    $duree = validate($_POST['duree']);
	$Type = validate($_POST['Type']);


	$user_data = 'code='.$code. 'date='.$date. 'duree='.$duree. 'date='.$Type;

	if (empty($code)) {
		header("Location: Event.php?error= erreur id Event &$user_data");
	
    }else if (empty($date)) {
		header("Location: Event.php?error=erreur nom Event&$user_data");
    }else if (empty($duree)) {
		header("Location: Event.php?error=erreur nom Event&$user_data");
    }else if (empty($Type)) {
		header("Location: Event.php?error=erreur nom Event&$user_data");
	}else {
       $sql = "INSERT INTO evenement(code,date,duree,Type) 
               VALUES('$code', '$date','$duree','$Type')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: Event.php?success=successfully created");
			 
       }else {
          header("Location: Event.php?error= error occurred&$user_data");
       }
	}
}

?>