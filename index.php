<?php

include 'connection.php';

if (isset($_SESSION["user_id"]) && $_SESSION["user_id"] != "") {
 
    redirect("dashboard.php");
}
include 'header.php';

$mode="";

if (isset($_POST['mode']))
{
$mode = $_POST['mode'];
}

if ($mode == "loginare") {
    $username = trim($_POST['username']);
    $pass = trim($_POST['user_password']);

    if ($username == "" || $pass == "") {

       
     
    } else {
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$pass' ";
        $results= mysqli_query($db,$sql);
        if (!$results)
        die('Invalid querry:' .mysqli_error($db));
        else 
            {

         

$sql2 = mysqli_query($db,"SELECT users.Id, users.nume, users.username,users.type, user_types.redirect, dash_text.content_text,dash_text.titlu FROM users LEFT JOIN dash_text  ON users.type=dash_text.user_type_id LEFT JOIN user_types ON users.type= user_types.Id WHERE users.username = '$username' AND users.password = '$pass'");
$myrow1=mysqli_fetch_array($sql2,MYSQLI_ASSOC);

$rows= mysqli_num_rows($sql2);

            if ($rows > 0) {
               
        

                $_SESSION["user_id"] = $myrow1["Id"];
                $_SESSION["name"] = $myrow1["nume"];
                $_SESSION["username"] = $myrow1["username"];
                $_SESSION["titlu"] = $myrow1["titlu"];
                $_SESSION["continut"] = $myrow1["content_text"];
                $_SESSION["type"] = $myrow1["type"];

               


                redirect($myrow1["redirect"]);
                exit;
            } 

        }
    }
    redirect("index.php");
}


?>

<script type="text/javascript">
function check_text()
{if (document.formular.username.value=="" || document.formular.username.value == "prenumele")
{alert ('Introduceti Username-ul');
return false;}
else if (document.formular.user_password.value=="" || document.formular.user_password.value == "prenumele")
{alert ('Introduceti Parola');
return false;}
}

</script>


<!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">
  <style>
    .background-radial-gradient {
      background-color: hsl(218, 41%, 15%);
      background-image: radial-gradient(650px circle at 0% 0%,
          hsl(218, 41%, 35%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%),
        radial-gradient(1250px circle at 100% 100%,
          hsl(218, 41%, 45%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%);
    }

    #radius-shape-1 {
      height: 220px;
      width: 220px;
      top: -60px;
      left: -130px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    #radius-shape-2 {
      border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
      bottom: -60px;
      right: -110px;
      width: 300px;
      height: 300px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    .bg-glass {
      background-color: hsla(0, 0%, 100%, 0.9) !important;
      backdrop-filter: saturate(200%) blur(25px);
    }
  </style>

  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
          The best offer <br />
          <span style="color: hsl(218, 81%, 75%)">for your business</span>
        </h1>
        <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit.
          Temporibus, expedita iusto veniam atque, magni tempora mollitia
          dolorum consequatur nulla, neque debitis eos reprehenderit quasi
          ab ipsum nisi dolorem modi. Quos?
        </p>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
            <form name="formular" onsubmit="return check_text();" id="contact_form" method="post" action="">
              <p class="hide"><input type="text" name="mode" value="loginare" ></p>
              <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="form-outline mb-4">
                  <div class="form-outline">
                    <input type="text" id="form3Example1" class="form-control" name="username" value="prenumele" />
                    <label class="form-label" for="form3Example1">Username</label>
                  </div>
                </div>
   
              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" id="form3Example4" class="form-control" name="user_password" value="prenumele"/>
                <label class="form-label" for="form3Example4">Password</label>
              </div>

              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-4" name="submit" value="Submit">
                Log In
              </button>

              <!-- Register buttons -->
              <div class="text-center">
                <p>or sign up with:</p>
                 <div class="container "> 
                  <div class="row justify-content-center">
                    <div class="col-md-4">
                     <div class="iconbox col-md-12"> 
                        <i class='bx bxl-facebook-square'></i>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="iconbox col-md-12"> 
                        <i class='bx bxl-instagram-alt' ></i>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="iconbox col-md-12"> 
                        <i class='bx bxl-twitter' ></i>
                      </div>
                  </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->
<?php include 'footer.php'; ?>