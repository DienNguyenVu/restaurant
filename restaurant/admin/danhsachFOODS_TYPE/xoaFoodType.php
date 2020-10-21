<?php 
require '../../lib/dbCon.php';
require'../../lib/quantri.php';
?>


<?php 
$id=$_GET['id']; settype($id, "int");
$conn=myConnect();
		$qr="
	DELETE 
	FROM food_type
	WHERE id='$id'							
	";
	mysqli_query($conn,$qr);
	header("location:index.php");
?>
 ?>
}