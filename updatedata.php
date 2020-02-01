<?php

include('dbcon.php');
	$rollno= $_POST['rollno'];
	$name= $_POST['name'];
	$city= $_POST['city'];
	$pcon= $_POST['pcon'];
	$stream= $_POST['stream'];
	$sem= $_POST['sem'];
	$id=$_POST['sid'];
	$imagename=$_FILES['simg']['name'];
	$tempname=$_FILES['simg']['tmp_name'];
	move_uploaded_file($tempname,"images/$imagename");
	
	$qry="UPDATE `student` SET `rollno`='$rollno',`name`='$name',`city`='$city',`pcont`='$pcon',
	      `stream`='$stream', `sem`='$sem',`image`='$imagename' WHERE `id`='$id';";
		  $run= mysqli_query($con,$qry);
		  if($run==true)
		    {
			    ?>
			    <script type="text/javascript">
	                alert('Data Updated Successfully!!');
		            window.open('updateform.php?sid<?php echo $id;?>', '_self');
		        </script>
		        <?php
	        }
  

?>
