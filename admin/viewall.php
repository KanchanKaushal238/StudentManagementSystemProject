<?php
include("../dbcon.php");
include("../header1.php");

?>

<div class="panel panel-default">

<div class="panel panel-heading">
<h2><a class="btn btn-success" href="attendance1.php">Add Students</a>
<a class="btn btn-info pull-right" href="add1.php">Back</a>
</h2>



<div class="panel panel-body">

<table class="table table-striped">
<tr>
<th>Serial Number</th> <th>Dates</th> <th>Show Attendance</th>
</tr>

<?php $result=mysqli_query($con, "select distinct date from attendance_records");
$serialnumber=0;
while($row=mysqli_fetch_array($result))
{
$serialnumber++;

?>
<tr>
<td> <?php echo $serialnumber; ?></td>
<td> <?php echo $row['date']; ?>


</td>
<td>
<form action="showattendance.php" method="POST">
<input type="hidden" value="<?php echo $row['date']?>" name="date">
<input type="submit" value="Show Attendance" class="btn btn-primary">
</form>
</td>
</tr>
<?php

}

?>

</table>

</div>

</div>