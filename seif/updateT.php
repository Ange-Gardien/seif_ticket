<?php 

if (isset($_GET['codeC'])) {
	include "db_conn.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$codeC = validate($_GET['codeC']);
    
	$sql = "SELECT * FROM ticket WHERE codeC=$codeC";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
        
    }else {
    	header("Location: afficheT.php");
    }
}
else if(isset($_POST['updateT'])){
include "db_conn.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$codeC = validate($_POST['codeC']);
	$Type = validate($_POST['Type']);
    $codeE = validate($_POST['codeE']);
    $nomC= validate($_POST['nomC']);
    
   
  



	if (empty($codeC)) {
		header("Location:  aff_updateT.php?error= erreur codeC ticket&$user_data");

	}else if (empty($Type)) {
		header("Location:  aff_updateT.php?error=erreur nom &$user_data");
	}
else if (empty($codeE)) {
    header("Location:  aff_updateT.php?error=erreur recette &$user_data");

}else if (empty($nomC)) {
    header("Location:  aff_updateT.php?error=erreur  id_categorie&$user_data");
    
}

    else {
       $sql = "UPDATE  ticket SET codeC='$codeC', Type='$Type', codeE='$codeE', nomC='$nomC' WHERE codeC=$codeC ";
       $result = mysqli_query($conn, $sql);
    
       if ($result) {
       	  header("Location: aff_updateT.php?codeC=$codeC success=successfully updated");
			 
       }else {
          header("Location: aff_updateT.php?codeC=$codeC error=error occurred&$user_data");
       }
	}

}





?>







