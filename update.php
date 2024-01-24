<?php
      include 'connection.php';
if(isset($_POST['submit'])){
$name = $_POST['name'];
$designation = $_POST['designation'];
$phone = $_POST['phone'];
$email = $_POST['email'];

 
 
 $query = "INSERT INTO faculty1
                (name,designation,phone,email)
                VALUES ('".$name."','".$designation."','".$phone."','".$email."')";
                mysqli_query($db,$query)or die ('Error in updating Database');
?>
<script type="text/javascript">
 alert("Successfull Updated Teacher Info");
            
</script>
<?php
}
      ?>