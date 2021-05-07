<?php 

if (isset($_GET['code'])) {
	include "db_conn.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['code']);
    
	$sql = "SELECT * FROM evenement WHERE code=$code";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
        
    }else {
    	header("Location: afficherE.php");
    }
}
else if(isset($_POST['updateE'])){
include "db_conn.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$code = validate($_POST['code']);
	$date = validate($_POST['date']);
    $duree= validate($_POST['duree']);
	$Type= validate($_POST['Type']);

  



	if (empty($code)) {
		header("Location: aff_updateE.php?code=$code &error= erreur id categorie &$user_data");
	}
    else if (empty($date)) {
		header("Location: aff_updateE.php?date=$date &error=erreur nom categorie &$user_data");
	}
    else if (empty($duree)) {
		header("Location: aff_updateE.php?duree=$duree &error=erreur nom categorie &$user_data");
	}
    else if (empty($Type)) {
		header("Location: aff_updateE.php?code=$code &error=erreur nom categorie &$user_data");
	}
    else {
       $sql = "UPDATE evenement SET code='$code' , date ='$date' , duree='$duree' , Type ='$Type' WHERE code=$code";
              
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: aff_updateE.php?code=$code &success=successfully updated");
			 
       }else {
          header("Location: aff_updateE.php?code=$code &error=unknown error occurred&$user_data");
       }
	}

}


?>







