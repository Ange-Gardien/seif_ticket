<!DOCTYPE html>
<html>
<head>
	<title>ajouter categorie</title>
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
      <a class="nav-item nav-link" href="produit.php"><h4>Produits</h4></a>
      
    </div>
  </div>
</nav>

    <div class="container">
            <form action="create.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Ajouter categorie</h4><hr><br>
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
		     <label for="id">ID de categorie</label>
		     <input type="number" 
		           class="form-control" 
		           id="id" 
		           name="id" 
		           value="<?php if(isset($_GET['id']))
		                           echo($_GET['id']); ?>" 
		           placeholder="Enter ID de catogorie">
		 </div>
           <div class="form-group">
		     <label for="nom">Nom de categorie</label>
		     <input type="text" 
		           class="form-control" 
		           id="nom" 
		           name="nom" 
		           value="<?php if(isset($_GET['nom']))
		                           echo($_GET['nom']); ?>" 
		           placeholder="Enter nom de catogorie">
		   </div>
           <button type="submit" 
		          class="btn btn-primary"
		          name="create">ajouter</button>
		    <a href="affiche.php" class="link-primary">liste des categories</a>
        </form>
    </div>

 </body>
</html>