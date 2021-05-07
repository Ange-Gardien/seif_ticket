<!DOCTYPE html>
<html>
<head>
	<title>ajouter Tickets</title>
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
      <a class="nav-item nav-link active" href="#"><h4>Gestion</h4> <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="Ticket.php"><h4>Tickets</h4></a>
      
    </div>
  </div>
</nav>

    <div class="container">
            <form action="createT.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Ajouter Ticket</h4><hr><br>
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
		     <label for="codeC">Code de Client</label>
		     <input type="number" 
		           class="form-control" 
		           id="codeC" 
		           name="codeC" 
		           value="<?php if(isset($_GET['codeC']))
		                           echo($_GET['codeC']); ?>" 
		           placeholder="Enter Code Client">
		 </div>
           <div class="form-group">
		     <label for="Type">Type de Ticket</label>
		     <input type="text" 
		           class="form-control" 
		           id="Type" 
		           name="Type" 
		           value="<?php if(isset($_GET['Type']))
		                           echo($_GET['Type']); ?>" 
		           placeholder="Enter le Type de ticket">
		   </div>
           <div class="form-group">
		     <label for="codeE">Code evenement</label>
		     <input type="text" 
		           class="form-control" 
		           id="codeE" 
		           name="codeE" 
		           value="<?php if(isset($_GET['codeE']))
		                           echo($_GET['codeE']); ?>" 
		           placeholder="Enter Code Evenement">
		   </div>
           <div class="form-group">
		     <label for="nomC"> nom de Client</label>
		     <input type="text" 
		           class="form-control" 
		           id="nomC" 
		           name="nomC" 
		           value="<?php if(isset($_GET['nomC']))
		                           echo($_GET['nomC']); ?>" 
		           placeholder="Enter nom de Client">
		   </div>
           
           <button type="submit" 
		          class="btn btn-primary"
		          name="createT">ajouter</button>
		    <a href="afficheT.php" class="link-primary">liste des produits</a>
        </form>
    </div>

 </body>
</html>