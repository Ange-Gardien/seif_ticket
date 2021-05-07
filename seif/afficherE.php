<?php include "readE.php" ;?>
<!DOCTYPE html>
<html>
<head>
	<title>List Evenements</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
	
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
 
<nav class="navbar navbar-expand-lg navbar-light bg-light">
 
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
   <div class="navbar-nav">
	 <a class="nav-item nav-link active" href="#"><h4>Gestion Des Evenements</h4> <span class="sr-only">(current)</span></a>
	 <a class="nav-item nav-link" href="aff_update.php"><h4>Evenements</h4></a>
	 
   </div>
 </div>
</nav>
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
			      
				  <td>
				  
				  <a href="'aff_updateE.php?code='<?=$rows['code']?>" 
			      	     class="btn btn-success">Update</a>

			      	  <a href="deleteE.php?code=<?=$rows['code']?>" 
			      	     class="btn btn-danger">Delete</a>
			      </td>
			      
			    </tr>
			    <?php } ?>
			  </tbody>
			</table>
			<?php }?>
			<div class="link-right">
				<a href="Event.php" class="link-primary">Create</a>
			</div>
		</div>
	</div>
	<script>      
      function downloadPDFWithBrowserPrint() {
  window.print();
}
document.querySelector('#browserPrint').addEventListener('click', downloadPDFWithBrowserPrint);
    </script>
	 <button onclick="downloadPDFWithBrowserPrint()" class="btn btn-success" >Download as PDF</button>
	 <button   class="btn btn-success" ><a href="search.php">Search </a>     </button>
</body>

</html>