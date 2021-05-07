<!DOCTYPE html>
<html>
<head>
	<title>ajouter Evenement</title>
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
      <a class="nav-item nav-link active" href="#"><h4>Gestion Des Evenements</h4> <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="categorie.php"><h4>Evenements</h4></a>
      
    </div>
  </div>
</nav>

    <div class="container">
            <form action="createE.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Ajouter Evenement</h4><hr><br>
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
		     <label for="code">Code Event</label>
		     <input type="int" 
		           class="form-control" 
		           id="code" 
		           name="code" 
		           value="<?php if(isset($_GET['code']))
		                           echo($_GET['code']); ?>" 
		           placeholder="Enter ID de produit">
		 </div>
           <div class="form-group">
		     <label for="date">date Event</label>
		     <input type="date" 
		           class="form-control" 
		           id="date" 
		           name="date" 
		           value="<?php if(isset($_GET['date']))
		                           echo($_GET['date']); ?>" 
		           placeholder="Enter date de produit">
		   </div>
           <div class="form-group">
		     <label for="duree">duree event </label>
		     <input type="text" 
		           class="form-control" 
		           id="duree" 
		           name="duree" 
		           value="<?php if(isset($_GET['duree']))
		                           echo($_GET['duree']); ?>" 
		           placeholder="Enter date de produit">
		   </div>
           <div class="form-group">
		     <label for="Type">Type event</label>
		     <input type="text" 
		           class="form-control" 
		           id="Type" 
		           name="Type" 
		           value="<?php if(isset($_GET['Type']))
		                           echo($_GET['Type']); ?>" 
		           placeholder="Enter id de catogorie">
		   <br>
           <br>
           <button type="submit" 
		          class="btn btn-primary"
		          name="createE">ajouter</button>
		    <a href="afficherE.php" class="link-primary">liste des Evenements</a>
        </form>
    </div>

 </body>
</html>