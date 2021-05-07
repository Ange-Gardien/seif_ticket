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
    
	$sql = "SELECT * FROM produit WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
        
    }else {
    	header("Location: afficheP.php");
    }
}
else if(isset($_POST['updateP'])){
include "db_conn.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_POST['id']);
	$nom = validate($_POST['nom']);
    $recette = validate($_POST['recette']);
    $id_categorie= validate($_POST['id_categorie']);
    $prix = validate($_POST['prix']);
   
  



	if (empty($id)) {
		header("Location:  affiche_updateP.php?error= erreur id produit&$user_data");

	}else if (empty($nom)) {
		header("Location:  affiche_updateP.php?error=erreur nom &$user_data");
	}
else if (empty($recette)) {
    header("Location:  affiche_updateP.php?error=erreur recette &$user_data");

}else if (empty($id_categorie)) {
    header("Location:  affiche_updateP.php?error=erreur  id_categorie&$user_data");
    
}
else if (empty($prix)) {
    header("Location: affiche_updateP.php?error=erreur  prix&$user_data");
   
}
    else {
       $sql = "UPDATE  produit SET id='$id', nom='$nom', recette='$recette',id_categorie='$id_categorie', prix='$prix' WHERE id=$id ";
       $result = mysqli_query($conn, $sql);
    
       if ($result) {
       	  header("Location: affiche_updateP.php?id=$id success=successfully updated");
			 
       }else {
          header("Location: affiche_updateP.php?id=$id error=error occurred&$user_data");
       }
	}

}





?>







