<?php

require_once("connection.php");

if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {

    redirect("index.php");
}

include 'headerlogged.php';

?>

<?php
$db=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($db,"nova_clinic");

$LastName= $FirstName = "";


  if (empty($_POST["LastName"])) 
    {
        $LastLastNameErr = "Este necesar sa introduceti numele.";
        echo $LastLastNameErr;
    } 
    else $LastName = $_POST["LastName"];
    
   if (empty($_POST["FirstName"])) 
   {
    $sql="SELECT * FROM doctors where LastName LIKE '%$LastName%' "; 
   }
   else
   {
    $FirstName = $_POST["FirstName"];
    $sql="SELECT * FROM doctors where (LastName='$LastName' AND FirstName='$FirstName')"; 
   }

  $result= mysqli_query($db,$sql);
    ?>
    <table class="table table-striped">
       <thead class="table-dark">
          <tr>
             <th scope="col" class='col-xs-3 col-sm-2 text-center'>Id</th>
             <th scope="col" class='col-xs-3 col-sm-2 text-center'>Nume</th>
             <th scope="col" class='col-xs-3 col-sm-2 text-center'>Prenume</th>
             <th scope="col" class='col-xs-4 col-sm-2'>Fotografia</th>                                    
          </tr>
       </thead>
       <tbody>
          <?php while ($myrow=mysqli_fetch_array($result,MYSQLI_ASSOC))
         {echo "<tr><td class='col-xs-3 col-sm-2 text-center'>";
          echo $myrow["DocID"];
          echo "</td><td class='col-xs-3 col-sm-2 text-center'>";
          echo $myrow["LastName"];
          echo "</td><td class='col-xs-3 col-sm-2 text-center'>";
          echo $myrow["FirstName"];
          echo "</td><td class='col-xs-4 col-sm-2'>";
            echo "<img src='".$myrow["Image"]."' width=10% height=10%>";
            echo "</td></tr>"; 
       }
          ?>
       </tbody>
    </table>
    <?php include 'footer.php'; ?>