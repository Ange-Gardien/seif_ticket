<?php 

if (isset($_POST['create'])) {
	include "db_conn.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_POST['id']);
	$nom = validate($_POST['nom']);

	$user_data = 'id='.$id. '&nom='.$nom;

	if (empty($id)) {
		header("Location: categorie.php?error= erreur id categorie &$user_data");
	}else if (empty($nom)) {
		header("Location: categorie.php?error=erreur nom categorie&$user_data");
	}else {
       $sql = "INSERT INTO categoris(id, nom ,nbr_produit) 
               VALUES('$id', '$nom',null)";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: categorie.php?success=successfully created");
			 
       }else {
          header("Location: categorie.php?error= error occurred&$user_data");
       }
	}

}
?>