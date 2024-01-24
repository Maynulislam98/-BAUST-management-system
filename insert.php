<?php
      include 'connection.php';
if(isset($_POST['submit'])){
$id = $_POST['id'];
$file = $_POST['file'];
$Department = $_POST['Department'];
$date = $_POST['date'];

 
 
 $query = "INSERT INTO notice
                (id,file,Department,date)
                VALUES ('".$id."','".$file."','".$Department."','".$date."')";
                mysqli_query($db,$query)or die ('Error in updating Database');
?>
<script type="text/javascript">
 alert("Successfull Updated Teacher Info");
            
</script>
<?php
}
      ?>