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


$AppointmentID = $FirstName = $LastName= $Phone = $Email = $AppointmentDate = $AppointmentTime = $Speciality = $Message = "";


  
$start=0;
$limit=5;
$id=1;
if(isset($_GET['id']))
{
$id=$_GET['id'];
$start=($id-1)*$limit;
}



$sqlv="SELECT * FROM appointments LIMIT $start, $limit"; 
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
         <th scope="col">Nume</th>
         <th scope="col">Prenume</th>
         <th scope="col">Telefon</th> 
         <th scope="col">Email</th>
         <th scope="col">Data</th> 
         <th scope="col">Ora</th>
         <th scope="col">Specialitatea</th> 
         <th scope="col">Mesaj</th>                                      
      </tr>
   </thead>
   <tbody>
      <?php while ($myrow=mysqli_fetch_array($resultv,MYSQLI_ASSOC))
     {echo "<tr><td>";
     echo $myrow["AppointmentID"];
      echo "</td><td>";
      echo $myrow["LastName"];
      echo "</td><td>";
      echo $myrow["FirstName"];
      echo "</td><td>";
      echo $myrow["Phone"];
      echo "</td><td>";
      echo $myrow["Email"];
      echo "</td><td>";
      echo $myrow["AppointmentDate"];
      echo "</td><td>";
      echo $myrow["AppointmentTime"];
      echo "</td><td>";
      echo $myrow["Speciality"];
      echo "</td><td>";
      echo $myrow["Message"];
      echo "</td></tr>"; 
   }
      ?>
   </tbody>
</table>

<?php

$rows= mysqli_num_rows(mysqli_query($db,"SELECT * FROM appointments "));
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