<?php include "readT.php";?>
<!DOCTYPE html>
<html>
<head>
	<title>affiche</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
	<style>

.printbtn{




}



	</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#"><h4>Gestion</h4> <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="ticket.php"><h4>Ticket</h4></a>
      
    </div>
  </div>
</nav>
	<div class="container">
		<div class="box">
			<h4 class="display-4 text-center">Liste de Tickets</h4><br>
			
			<?php if (mysqli_num_rows($result)) { ?>
			<table class="table table-striped">
			  <thead>
			    <tr>
			       
			      <th scope="col">Code Client</th>
			      <th scope="col">Type de Ticket</th>
			      <th scope="col">Code Evenement</th>
				  <th scope="col">Nom de Client</th>
			    </tr>
			  </thead>
			  <tbody>
              <?php 
			  	   $i = 0;
			  	   while($rows = mysqli_fetch_assoc($result)){
			  	   $i++;
			  	 ?>
			    <tr>
			     
			      <td><?php echo $rows['codeC']; ?></td>
			      <td><?php echo $rows['Type']; ?></td>
                  <td><?php echo $rows['codeE']; ?></td>
			      <td><?php echo $rows['nomC']; ?></td>
				  <td><?php echo "50"; ?></td>

			      <td><a href="aff_updateT.php?codeC=<?=$rows['codeC']?>" 
			      	     class="btn btn-success">Update</a>

			      	  <a href="deleteT.php?codeC=<?=$rows['codeC']?>" 
			      	     class="btn btn-danger">Delete</a>
			      </td>
			    </tr>
			    <?php } ?>
			  </tbody>
			</table>
			<?php }?>
			<div class="link-right">
				<a href="ticket.php" class="link-primary">Create</a>
			</div>
		</div>
	</div>
	<script>      
      function downloadPDFWithBrowserPrint() {
  window.print();
}
document.querySelector('#browserPrint').addEventListener('click', downloadPDFWithBrowserPrint);
    </script>
	 <button onclick="downloadPDFWithBrowserPrint()" class="btn btn-success">Download as PDF</button>
</body>
</html>