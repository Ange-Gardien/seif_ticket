<?php include "readE.php";?>
<!DOCTYPE html>
<html>
<head>
	<title>List Evenements</title>
	
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
 
 
</nav>
	<div class="container">
		<div class="box">
			<h4 class="display-4 text-center">Liste Des Evenements</h4><br>
			
			<?php if (mysqli_num_rows($result)) { ?>
			<table class="table table-striped">
			  <thead>
			    <tr>
			      
			      <th scope="col">Code</th>
			      <th scope="col">Date</th>
			      <th scope="col">Duree</th>
                  <th scope="col">Type</th>
                  
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
			     
			      <td><?php echo $rows['code']; ?></td>
			      <td><?php echo $rows['date']; ?></td>
                  <td><?php echo $rows['duree']; ?></td>
			      <td><?php echo $rows['Type']; ?></td>
			      

			      <td><a href="affiche_updateP.php?id=<?=$rows['id']?>" 
			      	     class="btn btn-success">Update</a>

			      	  <a href="deleteP.php?id=<?=$rows['id']?>" 
			      	     class="btn btn-danger">Delete</a>
			      </td>
			    </tr>
			    <?php } ?>
			  </tbody>
			</table>
			<?php }?>
			<div class="link-right">
				<a href="createE.php" class="link-primary">Create</a>
			</div>
		</div>
	</div>
</body>
</html>