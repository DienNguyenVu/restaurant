<?php
function danhsachmonan(){
	$conn=myConnect();
	$qr="
		select * from foods 
		order by id desc
	";
	$result=mysqli_query($conn,$qr);

return $result;
}
function chitietmonan($id){
	$conn=myConnect();
	$qr="
		select * from foods
		where id=$id 
		order by id desc
	";
	$result=mysqli_query($conn,$qr);

return $result;
}
function monancungloai($id_type){
	$conn=myConnect();
	$qr="
		select * from foods
		where id_type=$id_type
	";
	$result=mysqli_query($conn,$qr);

return $result;
}


function timkiem($search)
{
	$conn=myConnect();
	$qr="
		Select * from foods 
		where  name like '%$search%' or price like'%$search%'
	";
	$result=mysqli_query($conn,$qr);

return $result;
}
 ?>