<?php 
function listFood_type(){
	$conn=myConnect();
	$qr="
		select * from food_type
		order by id desc
	";
	$result=mysqli_query($conn,$qr);

return $result;
}
function listFood(){
	$conn=myConnect();
	$qr="
		select * from foods
		order by id desc
	";
	$result=mysqli_query($conn,$qr);

return $result;
}
function listFood_type1($id)
{
	$conn=myConnect();
	$qr="
		select * from food_type
		where id=$id
		order by id desc
	";
	$result=mysqli_query($conn,$qr);

return  mysqli_fetch_array($result);
}

 ?>