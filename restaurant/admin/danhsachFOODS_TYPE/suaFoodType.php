<?php 
require '../../lib/dbCon.php';
require'../../lib/quantri.php';
?>

<?php 
	$id=$_GET['id']; 
	settype($id, 'int');
	$row_food=listFood_type1($id);
?>

<?php 
 if(isset($_POST['btnSua']))
 {
 	$name			=$_POST['name'];
	$des 			=$_POST['description']; 	
	$image			=$_FILES['image']['name']; 		
	
	$conn=myConnect();
	if($image=="")
	{
	$qr="
	UPDATE
	food_type 
	SET 
	name 			='$name',
	description 	='$des',
	WHERE id 		='$id'						
	";
	}else
	{
		$qr="
	UPDATE
	food_type 
	SET 
	name 			='$name',
	description 	='$des',
	image 			='$image'
	WHERE id 		='$id'						
	";
	}


	mysqli_query($conn,$qr);
	header("location:index.php");
 }
 ?>

<div style="">
                  <form action="" method="post" accept-charset="utf-8">
                    <input type="text" name="name" value="<?php echo $row_food['name'] ?>" placeholder="name">Name
                    <textarea name="description" value="description" cols="100" rows="7">
                    	<?php echo $row_food['description'] ?>
                    </textarea>Description
                    <input type="file" name="image" value="<?php echo $row_food['image'] ?>" placeholder="">image
                    <button type="submit" name='btnSua'>Sửa</button>
                  </form>
</div>