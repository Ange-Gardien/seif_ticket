<?php include "read.php";?>
<!DOCTYPE html>
<html>
<head>
	<title>affiche</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
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
		<div class="box">
			<h4 class="display-4 text-center">Liste Des Catégories</h4><br>
			
			<?php if (mysqli_num_rows($result)) { ?>
			<table class="table table-striped">
			  <thead>
			    <tr>
			       
			      <th scope="col">ID</th>
			      <th scope="col">Nom</th>
			      <th scope="col">Nbr</th>
				  <th scope="col">      </th>
			    </tr>
			  </thead>
			  <tbody>
              <?php 
			  	   $i = 0;
			  	   while($rows = mysqli_fetch_assoc($result)){
			  	   $i++;
			  	 ?>
			    <tr>
			     
			      <td><?php echo $rows['id']; ?></td>
			      <td><?php echo $rows['nom']; ?></td>
				  <td><?php echo "50"; ?></td>

			      <td><a href="affiche_update.php?id=<?=$rows['id']?>" 
			      	     class="btn btn-success">Update</a>

			      	  <a href="delete.php?id=<?=$rows['id']?>" 
			      	     class="btn btn-danger">Delete</a>
			      </td>
			    </tr>
			    <?php } ?>
			  </tbody>
			</table>
			<?php }?>
			<div class="link-right">
				<a href="categorie.php" class="link-primary">Create</a>
			</div>
		</div>
	</div>
</body>
</html>