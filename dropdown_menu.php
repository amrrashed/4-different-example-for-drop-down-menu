<!DOCTYPE html lang="ar" dir="rtl">
<html>
<body>
<head>
    <meta charset="utf-8">
     <script type="text/javascript"  src="//code.jquery.com/jquery-1.11.3.min.js"></script>
</head>

<!---method 1---->
<select   id="date" size="1"   name="date" >
<option selected value=" ">اختر</option>
<option  value="هجري">هجري</option>
<option  value="ميلادي">ميلادي</option>
</select>

<br />
<br />

<!---method 2---->
<select   id="day" size="1"  name="day" >
<option selected value="0">يوم </option>
         <?php
	for ($x = 1; $x <= 30; $x++) {		
	echo "<option value='$x'>  $x</option>";	
		}
	?>
        </select>
<br />
<br />

<!---method 3---->
<?php
    include_once 'config_scholarship.php';
    $result=mysqli_query($conn,"SELECT * FROM month order by num"); 
?>
  <select   id="month" size="1"  name="month" >
		<option selected value="0">شهر </option>
                 <?PHP
		while($row= mysqli_fetch_array($result))
				{
		echo "<option value='$row[num]'>  $row[num]</option>";		
				}
				?>
        </select>
<br />
<br />



<!---method 4---->
<script type="text/javascript">
$(document).ready(function()
{
$(".geoghigri").change(function()
{
var id=$(this).val();
var dataString = 'id='+ id;
$.ajax
({
type: "POST",
url: "test.php",
data: dataString,
cache: false,
success: function(html)
{
$(".year").html(html);
} 
});
});
});
</script>
 <select  class="geoghigri" id="geoghigri" size="1"   name="geoghigri" >
		<option selected value=" ">اختر</option>
                <option  value="1">ميلادي</option>
                <option  value="2">هجري</option>
               
			</select>
 <select  class="year" id="birthdate3" size="1"  name="birthdate3" >
		<option selected value="0">سنة </option>
                </select>



</body>
</html>
