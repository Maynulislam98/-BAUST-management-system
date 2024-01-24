<?php
      include 'connection.php';
if(isset($_POST['submit'])){
$sid = $_POST['sid'];
$tname = $_POST['tname'];
$designation = $_POST['designation'];
$department = $_POST['department'];
$email = $_POST['email'];

 
 
 $query = "INSERT INTO cse
                (sid,tname,designation,department,email)
                VALUES ('".$sid."','".$tname."','".$designation."','".$department."','".$email."')";
                mysqli_query($db,$query)or die ('Error in updating Database');
?>
<script type="text/javascript">
 alert("Successfull Updated Teacher Info");
            
</script>
<?php
}
      ?>