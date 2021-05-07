<!DOCTYPE html>
<html>
<head>
	<title>Search Bar using PHP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <style>
div {
  background-image: url('bk1.jpg');
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
      <a class="nav-item nav-link active" href="#"><h4>Categories</h4> <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="produit.php"><h4>Produits</h4></a>
      
    </div>
  </div>
</nav>




<form method="post">
<label>Search</label>
<input type="text" name="search">
<input type="submit" name="submit">
	
</form>

</body>
</html>

<?php
$con = new PDO("mysql:host=localhost;dbname=lef_lef",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `evenement` WHERE code = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table>
			<tr>
				<th>code</th>
				<th>date</th>
                <th>duree</th>
				<th>Type</th>
			</tr>
			<tr>
				<td><?php echo $row->code; ?></td>
				<td><?php echo $row->date;?></td>
                <td><?php echo $row->duree; ?></td>
				<td><?php echo $row->Type;?></td>
			</tr>

		</table>
<?php 
	}
		
		
		else{
			echo "Name Does not exist";
		}


}

?>
