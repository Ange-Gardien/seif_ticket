<?php require_once "config.php" ;
$sql=" INSERT INTO `ticket` (`codeC`, `codeE`, `type`)
VALUES
('$_POST[name]','$_POST[event_nom]','$_POST[type]')";

if (mysqli_query($conn, $sql)) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>