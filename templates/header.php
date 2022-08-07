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

header{
      background: url(img/man.jpg);
      background-size: cover;
      background-position: center;
      min-height: 1000px;
    }
    @media screen and (max-width: 670px){
      header{
        min-height: 500px;
      }
    }
    .section{
      padding-top: 4em;
   
    }
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
<body class="grey lighten-4">

  <!-- navbar -->
  <header>
<nav class="nav-wrapper ">
  <div class="container">
    <a href="" class="brand-logo">Welcome To Zambia</a>
    <a href="" class="sidenav-trigger" data-target="mobile-menu">  
      <i class="material-icons">menu</i></a>
  
    <ul class="right hide-on-med-and-down">
      <li><a href="#photos" class="" id="">Photos</a>
      <li><a href="#services" class="" id="">Services</a>
      <li><a href="#contacts" class="" id="">Contacts</a></li>
     
    </ul>
    <ul class="sidenav grey lighten-2" id="mobile-menu">
      <li><a href="#">Photo's</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Contact</a></li>
       
      </a></li>
      </a></li>
    </ul>
  </div>
</nav>
