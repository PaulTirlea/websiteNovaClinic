<?php

require_once("connection.php");

if (!isset($_SESSION["user_ServiceId"]) || $_SESSION["user_ServiceId"] == "") {

    redirect("index.php");
}

include 'headerlogged.php';

?>
<?php

$db=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($db,"nova_clinic");

$ServiceId = "";


  if (empty($_POST["ServiceId"])) 
    {
        $ServiceIdErr = "Este necesar sa introduceti ServiceId-ul.";
        echo $ServiceIdErr;
    } 
    else $ServiceId = $_POST["ServiceId"];
    
   $result= mysqli_query($db,"CALL stergereServiciu($ServiceId)");

   if (!$result)
   die('InvalServiceId querry:' .mysqli_error($db));
   else 
   {
    echo "Serviciul cu ServiceId-ul ".$ServiceId." a fost sters";
  }

    ?>
<?php include 'footer.php'; ?>