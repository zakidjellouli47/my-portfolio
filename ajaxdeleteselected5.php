<?php
include"dbcon.php"; 
if(isset($_POST["selected"]))
{

$selected  = $_POST['selected'];
foreach ($selected as $value) {
 $sql = "DELETE FROM testimonials WHERE id='$value'";
 if ($conn->query($sql) === TRUE) {
     
   
    echo '<meta http-equiv="refresh" content="1;url=tem.php" />';     } else {
  echo "Error deleting record: " . $sql . "<br>" . $conn->error."'"; 
 } 
 
}
}
?>

