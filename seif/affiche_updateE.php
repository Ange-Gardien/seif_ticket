<?php include 'updateE.php'; ?>
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
      <a class="nav-item nav-link active" href="#"><h4>Gestion</h4> <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="Event.php"><h4>Evenements</h4></a>
      
    </div>
  </div>
</nav>

    <div class="container">
            <form action="updateE.php" 
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
		     <label for="code">nouveau code de produit</label>
		     <input type="number" 
		           class="form-control" 
		           id="code" 
		           name="code" 
                   value="<?=$row['code'] ?>" 
		           >
		 </div>
           <div class="form-group">
		     <label for="date">nouveau date de produit</label>
		     <input type="text" 
		           class="form-control" 
		           id="date" 
		           name="date" 
		           value="<?=$row['date'] ?>" 
		    >
		   </div>
           <div class="form-group">
		     <label for="duree">nouveau duree </label>
		     <input type="int" 
		           class="form-control" 
		           id="duree" 
		           name="duree" 
                   value="<?=$row['duree'] ?>" >
                   </div> 


                   <div class="form-group">
		     <label for="Type">nouveau Type </label>
		     <input type="varchar" 
		           class="form-control" 
		           id="Type" 
		           name="Type" 
		           value="<?=$row['Type'] ?>" 
		    >
		   </div>
           
          


           <input type="int" 
		          name="code"
		          value="<?=$row['code']?>"
		          hidden >

           <button type="submit" 
		          class="btn btn-primary"
		          name="updateE">update</button>
		    <a href="afficherE.php" class="link-primary">liste des evenements</a>
        </form>
    </div>

 </body>
</html>