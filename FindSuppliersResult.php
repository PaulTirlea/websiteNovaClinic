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

$Category = "";


  if (empty($_POST["Category"])) 
    {
        $CategoryErr = "Este necesar sa selectati categoria.";
        echo $CategoryErr;
    } 
   else
   {
    $Category = $_POST["Category"];
    $sql="SELECT * FROM suppliers where Category='$Category' "; 
   }

  $result= mysqli_query($db,$sql);
    ?>

<table class="table table-striped">
   <thead class="table-dark">
      <tr>
         <th scope="col">Id</th>
         <th scope="col">Numele companiei</th>
         <th scope="col">Tara</th>
         <th scope="col">Orasul</th> 
         <th scope="col">Adresa</th>
         <th scope="col">Telefon</th> 
         <th scope="col">Email</th>
         <th scope="col">Categoria</th>                                       
      </tr>
   </thead>
   <tbody>
      <?php while ($myrow=mysqli_fetch_array($result,MYSQLI_ASSOC))
     {echo "<tr><td>";
     echo $myrow["Id"];
      echo "</td><td>";
      echo $myrow["CompanyName"];
      echo "</td><td>";
      echo $myrow["Country"];
      echo "</td><td>";
      echo $myrow["City"];
      echo "</td><td>";
      echo $myrow["Adress"];
      echo "</td><td>";
      echo $myrow["Phone"];
      echo "</td><td>";
      echo $myrow["Email"];
      echo "</td><td>";
      echo $myrow["Category"];
      echo "</td></tr>"; 
   }
      ?>
   </tbody>
</table>


<?php include 'footer.php'; ?>

