<?php

session_start();
		if(isset($_SESSION['uid']))
		{
			echo "";
			
		}
	else
	{
		header('location: ../index.php');
	}
?>
<?php
    include('header.php');
	include('titlehead.php');
	
?>
<table align = "center">
<form action="deletestudent.php" method = "post" >
    <tr>
	   <th>Enter Stream</th><td> <input type = "text" name = "stream" placeholder="Enter Stream" required="required"/> 
	   </td>
	   	   <th>Enter RollNo</th><td> <input type = "number" name = "rollno" placeholder="Enter rollno" required="required"/> 
	   </td>
	
    </tr>
	<td colspan = "2" align = "center"><input type = "submit" name = "submit" value= "Search"/></td>
</form>
</table>
<table align= "center" width = "80%" border="1" style= "margin_top:10px;">
    <tr style="background-color:#000; color:#fff;">
	<th>No</th>
	<th>Image</th>
	<th>Name</th>
	<th>RollNo</th>
	<th>Delete</th>
	</tr>
	<?php
     if(isset($_POST['submit']))
	 {
		include('../dbcon.php');
		
		$stream=$_POST['stream'];
		$rollno=$_POST['rollno'];
		
		$sql="SELECT * FROM `student` WHERE stream='$stream' AND rollno='$rollno'";
		$run = mysqli_query($con, $sql);
		
		if(mysqli_num_rows($run)<1)
		{
			echo "<tr><td colspan='5'>No Records Found</td></tr>";
		}
		else
		{
			$count=0;
			while($data=mysqli_fetch_assoc($run))
			{
				$count++;
				?>
				
				<tr align = "center">
	               <td><?php echo $count;?></td>
	               <td><img src="../images/<?php echo $data['image']; ?>" style="max-width:100px;"/></td>
	               <td><?php echo $data['name'];?></td>
	               <td><?php echo $data['rollno'];?></td>
	               <td><a href="deleteform.php?sid=<?php echo $data['id'];?>">Delete</a></td>
	            </tr>
	  
				
				
				<?php
			}
		}
	 }
    ?>
</table>
