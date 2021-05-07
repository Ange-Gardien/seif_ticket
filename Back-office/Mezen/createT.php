<?php 

if (isset($_POST['createP'])) {
	include "db_conn.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_POST['id']);
	$nom = validate($_POST['nom']);
    $recette= validate($_POST['recette']);
    $id_categorie = validate($_POST['id_categorie']);
    $prix = validate($_POST['prix']);

	$user_data = 'id='.$id. '&nom='.$nom .'&recette='.$recette. '&id_categorie='.$id_categorie .'&prix='.$prix ;

	if (empty($id)) {
		header("Location:  produit.php?error= erreur id produit&$user_data");

	}else if (empty($nom)) {
		header("Location:  produit.php?error=erreur nom &$user_data");
	}
else if (empty($recette)) {
    header("Location:  produit.php?error=erreur recette &$user_data");

}else if (empty($id_categorie)) {
    header("Location:  produit.php?error=erreur  id_categorie&$user_data");
    
}
else if (empty($prix)) {
    header("Location: produit.php?error=erreur  prix&$user_data");
   
}
    else {
       $sql = "INSERT INTO produit(id, nom , recette , id_categorie ,prix) 
               VALUES('$id', '$nom','$recette','$id_categorie','$prix')";
       $result = mysqli_query($conn, $sql);
    
       if ($result) {
       	  header("Location: produit.php?success=successfully created");
			 
       }else {
          header("Location: produit.php?error=error occurred&$user_data");
       }
	}

}
?>