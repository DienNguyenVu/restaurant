<?php 
require '../../lib/dbCon.php';
require'../../lib/quantri.php';
?>

<?php 
 if(isset($_POST['them']))
 {
 	$name			=$_POST['name'];
	$des 			=$_POST['description']; 	
	$image			=$_POST['image']; 		
	
	$conn=myConnect();
	echo	$qr="
	INSERT INTO food_type VALUES (
		null,
		'$name',
		'$des',
		'$image'
								)
	";
	mysqli_query($conn,$qr);
	header("location:index.php");
 }
 ?>
 <div>
 <form action="" method="post" accept-charset="utf-8">
 	<table>

 			<tr>
 				<td>Name</td>
 				<td>
 					<input type="text" name="name" value="" placeholder="name">
 				</td>
 			</tr>
 			<tr>
 				<td>Description</td>
 				<td>
 					<textarea name="description">Description</textarea>	
 				</td>
 			</tr>
 			<tr>
 				<td>Image</td>
 				<td>
 					<input type="" name="image" value="" placeholder="">	
 				</td>
 			</tr>
 			<tr>
 				<td></td>
 				<td>
 					 <button type="submit" name='them'>Thêm</button>	
 				</td>
 			</tr>

 		
 	</table>
 </form>
                  
                 
                   
                  
</div>