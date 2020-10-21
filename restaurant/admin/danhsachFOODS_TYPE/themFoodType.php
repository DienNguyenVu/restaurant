<?php 
require '../../lib/dbCon.php';
require'../../lib/quantri.php';
?>

<?php 
print_r($_FILES);
 if(isset($_POST['them']))
 {
 	$name			=$_POST['name'];
	$des 			=$_POST['description']; 	
	$hinh			=$_FILES['image']['name']; 		
	
	$conn=myConnect();
	$qr="
	INSERT INTO `food_type` (`id`, `name`, `description`, `image`) 
	VALUES (NULL, '$name', '$des', '$hinh');";
	move_uploaded_file($_FILES['image']['tmp_name'], "../../assets/images/hinh_loai_mon_an/$hinh");
//	echo $qr; exit;
	
	mysqli_query($conn,$qr);
	header("location:index.php");
 }

 ?>
 <div>
 <form action="" method="post" accept-charset="utf-8" enctype="multipart/form-data">
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
 					<input type="file" name="image" value="" placeholder="">	
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