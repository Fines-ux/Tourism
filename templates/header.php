<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <!-- font awesome -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
 <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <title>Tourist's Guide</title>
<style>

    .tabs .tab a:focus, .tabs .tab a:focus.active {
    background-color: rgba(108, 130, 191, 0.2);
    outline: none;
}
.tabs .tab a:hover, .tabs .tab a.active {
    background-color: transparent;
    color: #45b0c3;
}

.tabs .indicator {
    position: absolute;
    bottom: 0;
    height: 2px;
    background-color: #1a3e3d;
    will-change: left, right;
}
</style>
</head>
<body>

  <!-- navbar -->
  <header>
<nav class="nav-wrapper   grey darken-2">
  <div class="container">
    <a href="home.php" class="brand-logo">Welcome To Zambia</a>
    <a href="" class="sidenav-trigger" data-target="mobile-menu">  
      <i class="material-icons">menu</i></a>
  
    <ul class="right hide-on-med-and-down">
      <li><a href="lakes.php" class="" id="">Lakes</a>
      <li><a href="rivers.php" class="" id="">Rivers</a>
      <li><a href="waterfalls.php" class="" id="">Waterfalls</a>
      <li><a href="entryFees.php" class="" id="">Entry</a>
      <li><a href="add.php" class="" id="">Competition</a>
    </li>
     
    </ul>
    <ul class="sidenav grey lighten-2" id="mobile-menu">
      <li><a href="lakes.php" class="" id="">Lakes</a>
      <li><a href="rivers.php" class="" id="">Rivers</a>
      <li><a href="waterfalls.php" class="" id="">Waterfalls</a>
      <li><a href="entryFees.php" class="" id="">Entry</a>
      <li><a href="add.php" class="" id="">Competition</a>
       
      </a></li>
      </a></li>
    </ul>
  </div>
</nav>
</header>