<?php
include('config_scholarship.php');
if(!null== filter_input(INPUT_POST,'id')){
    
$id=filter_input(INPUT_POST,'id');
$sql=mysqli_query($conn,"Select * from test where  id='$id'");
while($row=mysqli_fetch_array($sql))
{
$yearx=$row['year'];
echo '<option value="'.$yearx.'">'.$yearx.'</option>';
}
}
?>
