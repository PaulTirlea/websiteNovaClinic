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

$LastName= $Phone = "";


  if (empty($_POST["LastName"])) 
    {
        $LastLastNameErr = "Este necesar sa introduceti numele.";
        echo $LastLastNameErr;
    } 
    else $LastName = $_POST["LastName"];
    
   if (empty($_POST["Phone"])) 
   {
    $sql="SELECT * FROM appointments where LastName LIKE '%$LastName%' "; 
   }
   else
   {
    $Phone = $_POST["Phone"];
    $sql="SELECT * FROM appointments where (LastName='$LastName' AND Phone='$Phone')"; 
   }

  $result= mysqli_query($db,$sql);
    ?>

<table id="editableTable" class="table table-bordered">
   <thead>
      <tr>
         <th>Id</th>
         <th>Nume</th>
         <th>Prenume</th>
         <th>Telefon</th> 
         <th>Email</th>
         <th>Data</th> 
         <th>Ora</th>
         <th>Specialitatea</th> 
         <th>Mesaj</th>                                      
      </tr>
   </thead>
   <tbody>
      <?php while ($myrow=mysqli_fetch_array($result,MYSQLI_ASSOC))
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

<?php include 'footer.php'; ?>
