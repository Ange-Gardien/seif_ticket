<?php include 'updateT.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>update</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body >
<nav class="navbar navbar-expand-lg navbar-light bg-light">
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#"><h4>Categories</h4> <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="ticket.php"><h4>Produits</h4></a>
      
    </div>
  </div>
</nav>

    <div class="container">
            <form action="updateT.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">update</h4><hr><br>
		   <?php if (isset($_GET['success'])) { ?>
		    <div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
		    </div>
		    <?php } ?>
           
           <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?> 

       <div class="form-group">
		     <label for="codeC">nouveau ID de produit</label>
		     <input type="number" 
		           class="form-control" 
		           id="codeC" 
		           name="codeC" 
                   value="<?=$row['codeC'] ?>" 
		           >
		 </div>
           <div class="form-group">
		     <label for="Type">nouveau Nom de produit</label>
		     <input type="text" 
		           class="form-control" 
		           id="Type" 
		           name="Type" 
		           value="<?=$row['Type'] ?>" 
		    >
		   </div>
           <div class="form-group">
		     <label for="codeE">nouveau rectette de produit </label>
		     <input type="text" 
		           class="form-control" 
		           id="codeE" 
		           name="codeE" 
                   value="<?=$row['codeE'] ?>" >
                   </div> 


                   <div class="form-group">
		     <label for="nomC">nouveau id categorie </label>
		     <input type="number" 
		           class="form-control" 
		           id="nomC" 
		           name="nomC" 
		           value="<?=$row['nomC'] ?>" 
		    >
		   

           <input type="number" 
		          name="codeC"
		          value="<?=$row['codeC']?>"
		          hidden >

           <button type="submit" 
		          class="btn btn-primary"
		          name="updateT">update</button>
		    <a href="afficheT.php" class="link-primary">liste des produits</a>
        </form>
    </div>

 </body>
</html>