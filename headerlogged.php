<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    


    <title>NOVA CLINIC</title>
  </head>
  <body>

  <!--NavBAR-->

    <nav class="navbar nav-tabs py-3 sticky-top navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="dashboard.php#home">
      <h2> NOVA CLINIC </h2>
     <!-- AICI PUN LOGO <!/-->

    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="dashboard.php#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <?php
         require_once("connection.php");
          // echo basename($_SERVER['PHP_SELF']);
         $page=basename($_SERVER['PHP_SELF']);

         $IdUser=$_SESSION["type"];

         
         $querry="SELECT pagini.Meniu, pagini.nume_meniu, pagini.pagina FROM pagini INNER JOIN drepturi ON drepturi.IdPage=pagini.Id WHERE drepturi.IdUser='$IdUser'";

         $sql1 = mysqli_query($db,$querry);


        $rows= mysqli_num_rows($sql1);



                    if ($rows > 0) {

         /* <li><a href="news.asp">News</a></li>*/
                    $sw=0;
                    while ($myrow=mysqli_fetch_array($sql1,MYSQLI_ASSOC))
                    {
                      if ($myrow["pagina"]==$page)
                        { $sw=1;}

                      if($myrow["Meniu"]==1)
                      {
                      echo "<li class='nav-item'><a class='nav-link' href='".$myrow["pagina"]."'>".$myrow["nume_meniu"]."</a></li>";
                      }
                      
                    }
                    }
                    if ($sw==0)
                    {
                      redirect("logout.php");
                    }

                    

          ?>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Log out</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>

