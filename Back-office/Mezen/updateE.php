<?php 

if (isset($_GET['id'])) {
	include "db_conn.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);
    
	$sql = "SELECT * FROM categoris WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
        
    }else {
    	header("Location: affiche.php");
    }
}
else if(isset($_POST['update'])){
include "db_conn.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_POST['id']);
	$nom = validate($_POST['nom']);
   
  



	if (empty($id)) {
		header("Location: affiche_update.php?id=$id &error= erreur id categorie &$user_data");
	}else if (empty($nom)) {
		header("Location: affiche_update.php?id=$id &error=erreur nom categorie &$user_data");
	}else {
       $sql = "UPDATE categoris SET id='$id' , nom ='$nom' WHERE id=$id";
              
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: affiche_update.php?id=$id &success=successfully updated");
			 
       }else {
          header("Location: affiche_update.php?id=$id &error=unknown error occurred&$user_data");
       }
	}

}






?>







