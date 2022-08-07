<?php
include('templates/header.php');
?>
<style>

header{
      background: url(img/livingstone.jpg);
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

nav {
    color: #fff;
    background-color: #ee6e73;
    width: 100%;
    height: 56px;
    line-height: 56px;
}

</style>

  <!-- photo / grid -->
  <section class="container">
  <div class="row">
      <div class="col s6 l4">
          <div class="card">
            
              <div class="card-image waves-effect waves-block waves-light card-panel hoverable">
                <img  src="img/images/rir.jpg" class="responsive-img materialboxed">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Rivers<i class="material-icons right">more_vert</i></span>
                <p><a href="rivers.php">Go to page</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Rivers<i class="material-icons right">close</i></span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum.</p>
              </div>
            </div>
        </div>
   
      <div class="col s6 l4">
          <div class="card">
              <div class="card-image waves-effect waves-block waves-light card-panel hoverable">
                <img class="responsive-img materialboxed" src="img/images/tan.jpg">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Lakes<i class="material-icons right">more_vert</i></span>
                <p><a href="lakes.php">Go to page</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Lakes<i class="material-icons right">close</i></span>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe.</p>
              </div>
            </div>
        </div>
  
      <div class="col s6 l4">
          <div class="card">
              <div class="card-image waves-effect waves-block waves-light card-panel hoverable">
                <img class="responsive-img materialboxed" src="img/images/lumangweFalls1.jpg">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Waterfalls<i class="material-icons right">more_vert</i></span>
                <p><a href="waterfalls.php">Go to page</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Waterfalls<i class="material-icons right">close</i></span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt!</p>
              </div>
            </div>
        </div>
   
  </section>
  <!-- parallax -->

  <div class="parallax-container">
    <div class="parallax">
      <img src="img/trees.jpg" alt="" class="responsive-img">
    </div>
  </div>

    <!-- services / tabs -->
<section class="container section scrollspy" id="services">
  <div class="row">
  <div class="col s12 l4">
    <h2 class="indigo-text text-darken-4">What We do...</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis voluptas perspiciatis ex 
      at provident optio! Doloribus
       unde quaerat inventore quam, necessitatibus modi 
       natus quos et, distinctio sit obcaecati fugiat totam.</p>
  </div>

            <div class="col s12 l6 offset-l2">
            <ul class="tabs">
                <li class="tab col s6">
                <a href="#photography" class="indigo-text text-darken-4">Entry</a></li>
                <li class="tab col s6">
                <a href="#editing" class="indigo-text text-darken-4">Competition</a>
                </li>
            </ul>
            <div class="col s12" id="photography">
                <p-flow-text class="flow-text indigo-text text-darken-4">Entry details...</p-flow-text>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis voluptas perspiciatis ex 
                at provident optio! Doloribus
                unde quaerat inventore quam, necessitatibus modi 
                natus quos et, distinctio sit obcaecati fugiat totam.</p>
                <a href="entryFees.php" class="">Go to entry page</a>
            </div>
            <div class="col s12" id="editing">
                <p-flow-text class="flow-text indigo-text text-darken-4">Competition details...</p-flow-text>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis voluptas perspiciatis ex 
                at provident optio! Doloribus
                unde quaerat inventore quam, necessitatibus modi 
                natus quos et, distinctio sit obcaecati fugiat totam.</p>
                <a href="add.php" class="">Go to competition page</a>
            </div>
        </div>
        </div>
    </section>
    
      <!-- parallax -->
  <div class="parallax-container">
    <div class="parallax">
      <img src="img/watch.jpg" alt="" class="responsive-img">
    </div>
  </div>
   <!-- contact form -->
 
<section class="section container scrollspy" id="contacts">
  <div class="row">
    <div class="col s12 l5">
      <h2 class="indigo-text text-darken-4">Get In Touch</h2>
      <p>Lorem ipsum, dolor sit amet consectetur 
        adipisicing elit. Dicta, recusandae tempore 
        nostrum architecto cum illum quo eos quos 
        voluptatibus nisi sequi porro, repudiandae 
        officiis dolores quisquam nobis blanditiis sed ex.</p>
      <p>Lorem ipsum, dolor sit amet consectetur 
        adipisicing elit. Dicta, recusandae tempore 
        nostrum architecto cum illum quo eos quos 
        voluptatibus nisi sequi porro, repudiandae 
        officiis dolores quisquam nobis blanditiis sed ex.</p>
      <p>Lorem ipsum, dolor sit amet consectetur 
        adipisicing elit. Dicta, recusandae tempore 
        nostrum architecto cum illum quo eos quos 
        voluptatibus nisi sequi porro, repudiandae 
        officiis dolores quisquam nobis blanditiis sed ex.</p>
    </div>
    <div class="col s12 l5 offset-l2">
      <form action="">
        <div class="input-field">
          <i class="material-icons prefix">email</i>
          <input type="email" id="email">
          <label for="email">Your email</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">message</i>
          <textarea id="message" class="materialize-text-area"></textarea>
          <label for="message">Your message</label>
        </div>
        <div class="input-field">
          <input type="text" id="date" class="datepicker">
          <label for="date">choose the date of message</label>
        </div>
        <div class="input-field">
          <p>Services Required...</p>
          <p>
          <label><input type="checkbox">
            <span>Complaint Filing</span>
          </label>
        </p>
       
        <p>
        <label><input type="checkbox">
          <span>Others</span>
        </label>
      </p>
        </div>
        <div class="input-field">
          <button class="btn">submit</button>
        </div>
      </form>
    </div>
  </div>
</section>
<?php
include('templates/footer.php');
?>
