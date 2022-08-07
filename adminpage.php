<?php
include('config/connect.php');
//write query for all user
$sql = 'SELECT First_Name, Last_Name, email, Receipt_No FROM competiters ORDER BY id';

//make query and get result
$result = mysqli_query($conn, $sql);

//fetch the reulting rows as array
$comps = mysqli_fetch_all($result, MYSQLI_ASSOC);
//free result from memory
mysqli_free_result($result);

//close connection
mysqli_close($conn);

//  print_r($comps);

?>
  <?php include('templates/header.php');?>

<h4 class="center grey-text">Competiters</h4>
<div class="container">
  <div class="row">

<?php foreach($comps as $comp) { ?>

  <div class="col s6 md3">
    <div class="card z-depth-0  lime lighten-4">
      <div class="card-content center">
        <h5><?php echo htmlspecialchars($comp['First_Name' ]) .' '. ($comp['Last_Name']); ?></h5>
        <div><?php echo htmlspecialchars($comp['email']);  ?></div>
        <div><?php echo htmlspecialchars($comp['Receipt_No']);  ?></div>
      </div>
    </div>
  </div>

<?php  }?>

</div>
</div>
  <?php include('templates/footer.php');?>
