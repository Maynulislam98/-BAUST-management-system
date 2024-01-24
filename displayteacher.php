<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead><tr>

         <th>Name</th>
         <th>Designation</th>
         <th>Phone</th>
         <th>Email</th>
         
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){
      $sn=1;      
      
      foreach($fetchData as $data){
    ?>
      <tr>
    
      <td><?php echo $data['name']??''; ?></td>
      <td><?php echo $data['designation']??''; ?></td>
      <td><?php echo $data['phone']??''; ?></td>
      <td><?php echo $data['email']??''; ?></td>
      
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
</body>
</html>