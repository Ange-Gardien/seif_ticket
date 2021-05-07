<?php 

if (isset($_POST['createT'])) {
	include "db_conn.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$codeC = validate($_POST['codeC']);
	$Type = validate($_POST['Type']);
    $codeE= validate($_POST['codeE']);
    $nomC = validate($_POST['nomC']);
   

	$user_data = 'codeC='.$id. '&Type='.$Type .'&codeE='.$codeE. '&nomC='.$nomC ;

	if (empty($codeC)) {
		header("Location:  ticket.php?error= erreur codeC ticket&$user_data");

	}else if (empty($Type)) {
		header("Location:  ticket.php?error=erreur Type &$user_data");
	}
else if (empty($codeE)) {
    header("Location:  ticket.php?error=erreur codeE &$user_data");

}else if (empty($nomC)) {
    header("Location:  ticket.php?error=erreur  nomC&$user_data");
    
}

    else {
       $sql = "INSERT INTO ticket(codeC, Type , codeE , nomC ) 
               VALUES('$codeC', '$Type','$codeE','$nomC')";
       $result = mysqli_query($conn, $sql);
    
       if ($result) {
       	  header("Location: ticket.php?success=successfully created");
			 
       }else {
          header("Location: ticket.php?error=error occurred&$user_data");
       }
	}

}
?>