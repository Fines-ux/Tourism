<?php 
include('config/connect.php');
include('templates/header.php');

if(isset($_POST['submit'])){
		
  // check first name
  if(empty($_POST['first_name'])){
    $errors['first_name'] = 'First name is required';
  } else{
    $first_name = $_POST['first_name'];

  }
  // check last name
  if(empty($_POST['last_name'])){
    $errors['last_name'] = 'Last name is required';
  } else{
    $last_name= $_POST['last_name'];
  }

  //check email
  if(empty($_POST['email'])){
    $errors['email'] = 'An email is required';
  } else{
    $email= $_POST['email'];
  }
  //check receipt number
  if(empty($_POST['receipt_no'])){
    $errors['receipt_no'] = 'A receipt number is required';
  } else{
    $receipt_no =$_POST['receipt_no'];
  }

//prevent malicious sql injection
$first_name = mysqli_real_escape_string($conn, $_POST['first_name'] );
$last_name = mysqli_real_escape_string($conn, $_POST['last_name'] );
$email = mysqli_real_escape_string($conn, $_POST['email'] );
$receipt_no = mysqli_real_escape_string($conn, $_POST['receipt_no'] );


//crete sql update
$sql = "INSERT INTO competiters(First_Name, Last_Name, email, Receipt_No) VALUES('$first_name' ,'$last_name', '$email', '$receipt_no')";

  // save to db and check
  if(mysqli_query($conn, $sql)){
    // success
    header('Location: login.php');
  }
 else {
  echo 'query error: '. mysqli_error($conn);
}

}

?>

<section class="container ">
   <h3 class="center-align indigo-text darken-4">Welcome To The Competition Page</h3>
  
</section>


<section class="container section scrollspy" id="photos">
  <div class="row">
    <div class="col s12 l4 ">
      <img src="img/sail.jpg" alt="" class="responsive-img materialboxed">
    </div>
    <div class="col s12 l6 offset-l1">
      <h2 class="indigo-text darken-4">Summary</h2>
      <p>This is the competition page, where you stand a chance to win a free trip(vacation) to Livingstone.</p>
    </div>
  </div>

  <div class="row">
    <div class="col s12 l4 push-l7 offset-l1">
      <img src="img/trees.jpg" alt="" class="responsive-img materialboxed">
    </div>
    <div class="col s12 l6 pull-l5 right-align offset-l1">
      <h2 class="indigo-text darken-4">CityScapes</h2>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam non magnam commodi impedit?</p>
    </div>
  </div>

  <div class="row">
    <div class="col s12 l4">
      <img src="img/watch.jpg" alt="" class="responsive-img materialboxed">
    </div>
    <div class="col s12 l6">
      <h2 class="indigo-text darken-4">Nature</h2>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam non magnam commodi impedit?</p>
    </div>
  </div>
</section>

  <div class="row">        
    <form class="col s12" action ="add.php" method="POST">
      <div class="row">
      <div class="input-field col s6 ">
      <i class="material-icons prefix">person</i>
          <input id="first_name" name ="first_name" type="text" class="validate" >
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6 ">
        <i class="material-icons prefix">person</i>
          <input id="last_name" name ="last_name" type="text" class="validate" >
          <label for="last_name">Last Name</label>
        </div>
      </div>

      <div class="row">
      <div class="input-field">
          <i class="material-icons prefix">email</i>
          <input type="email" id="email" name ="email" >
          <label for="email">Your email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field">
        <i class="material-icons prefix">receipt</i>
        <input id="receipt_bo" type="tel" name ="receipt_no" >
          <label for="receipt_no">Receipt number</label>
        </div>
      </div>
      </div>
      <div class="row">
        <div class="col push-l1">
        <div class="input-field ">
          <button class="btn" type="submit" value ="submit" name ="submit">submit</button>
        </div>
      </div>
    </div>
    </form>
  </div>
</section>
<?php include('templates/footer.php');?>
