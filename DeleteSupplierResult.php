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

$Phone = "";


  if (empty($_POST["Phone"])) 
    {
        $PhoneErr = "Este necesar sa introduceti telefonul.";
        echo $PhoneErr;
    } 
    else $Phone = $_POST["Phone"];
    
   $result= mysqli_query($db,"CALL stergereSupplier('$Phone')");

   if (!$result)
   die('Invalid querry:' .mysqli_error($db));
   else 
   {
    echo "Inregistrarea cu numarul de telefon ".$Phone." a fost stearsa";
  }

    ?>
<?php include 'footer.php'; ?>
