
<?php

require_once("connection.php");

if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {

    redirect("index.php");
}

include 'headerlogged.php';

?>

<!--HERO-->
<div class="hero vh-100 d-flex align-items-center"id="home">
 <div class="container">
  <div class="row">
    <div class="col-lg-7 mx-auto text-center">
    <h1 class= "display-4 text-white align-content-center"> Your health is our priority</h1>
    <p class="text-white my-4 align-content-center"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed magna odio, lobortis quis dictum iaculis, rutrum vitae ex. Morbi scelerisque sollicitudin auctor </p>
    <a href="#service" class="btn me-3 btn-primary "> Find out more</a>
    <a href="schedule.php" class="btn btn-outline-primary"> Book an appointment</a>
    </div>
  </div>
</div>
</div>
<!--//HERO ENDS HERE-->

<!--SERVICES-->
<section id="service">
   <div class="container"> 
    <div class="row mb-5">
      <div class="col-md-8 mx-auto text-center">
        <h6 class="text-primary"></h6>
        <h1>OUR SERVICES</h1>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed magna odio, lobortis quis dictum iaculis, rutrum vitae ex. Morbi scelerisque sollicitudin auctor. Duis vitae maximus diam. Vestibulum eu nisi a augue tempor euismod a sed nulla. Maecenas id finibus lacus. Nulla congue, quam quis sollicitudin interdum, est tellus egestas lacus, sed eleifend nunc arcu sit amet risus. Aenean laoreet nulla euismod, semper orci ut, pellentesque arcu. Morbi pharetra enim quam, non ornare nisi ornare ut.</p>
      </div>
    </div>
    <div class="row g-4">
      <div class="col-lg-4 col-sm-6">
        <div class="service card-effect">
          <div class="iconbox"> 
            <i class="bx bx-health"></i> 
          </div>
        <h5 class="mt-4 mb-2">Service</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
      </div>
    </div>

      <div class="col-lg-4 col-sm-6">
        <div class="service card-effect">
          <div class="iconbox"> 
            <i class="bx bxs-baby-carriage"></i> 
          </div>
        <h5 class="mt-4 mb-2"> Children health</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
      </div>
    </div>

      <div class="col-lg-4 col-sm-6">
        <div class="service card-effect">
          <div class="iconbox"> 
            <i class="bx bx-female-sign"></i> 
          </div>
        <h5 class="mt-4 mb-2"> Women Health</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
      </div>
    </div>

      <div class="col-lg-4 col-sm-6">
        <div class="service card-effect">
          <div class="iconbox"> 
            <i class="bx bx-accessibility"></i> 
          </div>
        <h5 class="mt-4 mb-2"> Kinetotherapy</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
      </div>
    </div>

      <div class="col-lg-4 col-sm-6">
        <div class="service card-effect">
          <div class="iconbox"> 
            <i class='bx bx-line-chart'></i> 
          </div>
        <h5 class="mt-4 mb-2"> Statisticly the best results</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
          </div>
      </div>

      <div class="col-lg-4 col-sm-6">
        <div class="service card-effect">
          <div class="iconbox"> 
            <i class='bx bx-male-sign'></i> 
          </div>
        <h5 class="mt-4 mb-2"> Men health</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
        </div>
      </div>
   </div>   
  </div>
</section>
<!--//SERVICES END HERE-->

<!--OUR TEAM SECTION-->
<section class="row w-100" id="ourteam">
<div class="col-lg-6 col-img">
    <img src="img/medicalteam.jpg">
</div>
<div class="col-lg-6">
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h6 class="text-primary">OUR TEAM</h6>
        <h1>Meet the lovely people who will take care of you!</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed magna odio, lobortis quis dictum iaculis, rutrum vitae ex. Morbi scelerisque sollicitudin auctor</p>
        <a href="seedoctors.php"><button type="button" class="btn btn-info">See Doctors</button>
        <a href="FindDoctors.php"><button type="button" class="btn btn-outline-info">Find Doctor</button>
      </div>
    </div>
  </div>
</div>
</section>
<!--//OUR TEAM SECTION ENDS HERE-->
<nav class="navbar navbar-light bg-light">
  <div class="container">
    <h4 class="row"> Follow us</h4> 

     <div class="iconbox"> 
        <i class='bx bxl-facebook-square'></i>
      </div>
      <div class="iconbox"> 
        <i class='bx bxl-instagram-alt' ></i>
      </div>
      <div class="iconbox"> 
        <i class='bx bxl-twitter' ></i>
      </div>
    
  </div>
</nav>

<?php include 'footer.php'; ?>

