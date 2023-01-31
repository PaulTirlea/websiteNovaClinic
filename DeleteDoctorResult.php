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

$DocID = "";


  if (empty($_POST["DocID"])) 
    {
        $DocIDErr = "Este necesar sa introduceti ID-ul.";
        echo $DocIDErr;
    } 
    else $DocID = $_POST["DocID"];
    
   $result= mysqli_query($db,"CALL stergereDoc($DocID)");

   if (!$result)
   die('Invalid querry:' .mysqli_error($db));
   else 
   {
    echo "Docotul cu ID-ul ".$DocID." a fost sters";
  }

    ?>
<?php include 'footer.php'; ?>