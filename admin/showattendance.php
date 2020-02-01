<?php
include("../dbcon.php");
include("../header1.php");

?>
<div class="panel panel-default">

<div class="panel panel-heading">
<h2><a class="btn btn-success" href="attendance1.php">Add Students</a>
<a class="btn btn-info pull-right" href="add1.php">Back</a>
</h2>

<h3><div class="well text-center">Date:<?php echo date("Y-m-d"); ?></div></h3>

<div class="panel panel-body">
<form action="add1.php" method="Post">
<table class="table table-striped">
<tr>
<th>#serial number </th><th>Student Name </th><th>Roll Number </th><th>Attendance Status </th>
</tr>

<?php
$date=$_POST['date'];
$result=mysqli_query($con,"select * from attendance_records where date = '$date'");
$serialnumber=0;
$counter=0;
while($row=mysqli_fetch_array($result))
{
$serialnumber++;

?>
<tr>
<td> <?php echo $serialnumber; ?></td>
<td> <?php echo $row['student_name']; ?>

</td>
<td> <?php echo $row['roll_number']; ?>

</td>
<td> <input type="radio" name="attendance_status[<?php echo $counter;?>]"
<?php 
if($row['attendance_status']=="Present") 
echo "checked=checked";

?>
 value="Present">Present
<td> <input type="radio" name="attendance_status[<?php echo $counter;?>]"
<?php 
if($row['attendance_status']=="Absent")
echo "checked=checked";

?>
 value="Absent">Absent
</td>
</tr>
<?php
$counter++;
}

?>

</table>
</form>
</div>

</div>