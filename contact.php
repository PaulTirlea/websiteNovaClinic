<?php

require_once("connection.php");

if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {

    redirect("index.php");
}

include 'headerlogged.php';

?>

    <!--CONTACT-->
<section id="contact">
   <div class="container"> 
    <div class="row mb-5">
      <div class="col-md-8 mx-auto text-center">
        <h1 class="text-primary">
          <i class='bx bx-phone'> </i>
        </h1>
        <h1>We're only one call away!</h1>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed magna odio, lobortis quis dictum iaculis, rutrum vitae ex. Morbi scelerisque sollicitudin auctor. Duis vitae maximus diam. Vestibulum eu nisi a augue tempor euismod a sed nulla. Maecenas id finibus lacus. </p>
      </div>
    </div>
    <div class="container">
    <div class="row">
      <div class="col-lg-4 col-sm-6 mx-auto w-50 h-50"> 
        <img src="img/call.jpg" alt="">
         <h4 class="text-center " > Our schedule is Monday to Sunday, non-stop at your disposal!</h4>
          </div>
         </div>
      </div>
      </div>
    </div>
  </div>

</section>
<!--//CONTACT section END HERE-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>