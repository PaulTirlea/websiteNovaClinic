<?php

require_once("connection.php");

if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {

    redirect("index.php");
}

include 'headerlogged.php';

?>
<style>
      .nav {
        background-color: lightgray; 
        list-style-type: none;
        text-align: center;
        margin: 0;
        padding: 0;
      }

      .nav li {
        display: inline-block;
        text-align: center;
        font-size: 20px;
        padding: 10px;
      }
      footer {
         bottom: 0;
         position: fixed;
        text-align: center;
        padding: 5px;
        background-color: lightgray;
        color: white;
        width: 100%;
        align-self: center;
      }
      
</style>
<?php

$db=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($db,"nova_clinic");


$Id = $CompanyName = $Country= $Phone = $Email = $City = $Adress = $Category = "";


  
$start=0;
$limit=5;
$id=1;
if(isset($_GET['id']))
{
$id=$_GET['id'];
$start=($id-1)*$limit;
}



$sqlv="SELECT * FROM suppliers LIMIT $start, $limit"; 
$resultv= mysqli_query($db,$sqlv);
 

if (!$resultv)
 die('Invalid querry:' .mysqli_error($db));
 else 
 {

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
      <?php while ($myrow=mysqli_fetch_array($resultv,MYSQLI_ASSOC))
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

<?php

$rows= mysqli_num_rows(mysqli_query($db,"SELECT * FROM suppliers "));
$total=ceil($rows/$limit);
if($id>1)
{
?>

<a href='?id=<?php echo $id-1?>' class='btn btn-outline-secondary'>Previous </a>
<?php
}
if($id!=$total)
{
   ?>
<a href='?id=<?php echo $id+1?>' class='btn btn-outline-dark'>Next </a>

<?php
}
?>
</br>
</br>
<footer>
   <?php
   echo "<ul class='nav justify-content-center'>";
   for($i=1;$i<=$total;$i++)
   {
   if($i==$id) { echo "<li class='current'>".$i."</li>"; }

   else { echo "<li><a href='?id=".$i."'>".$i."</a></li>"; }
   }
   echo "</ul>";
   ?>
</footer>
 <?php } ?>


<?php include 'footer.php'; ?>