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


$CompanyName= $Country= $Phone = $Email = $City = $Adress = $Category = "";


  if (empty($_POST["CompanyName"])) 
    {
        $CompanyNameErr = "Este necesar sa introduceti numele companiei.";
        echo $CompanyNameErr;
    } 
    elseif (empty($_POST["Phone"])) 
    {
        $PhoneErr = "Este necesar sa introduceti telefonul.";
        echo $PhoneErr;
    } 
    elseif (empty($_POST["Email"])) 
    {
        $EmailErr = "Este necesar sa introduceti emailul.";
        echo $EmailErr;
    }
    else
    {
        $CompanyName = $_POST["CompanyName"];
        $Country = $_POST["Country"];
        $Phone = $_POST["Phone"];
        $Email = $_POST["Email"];
        $City = $_POST["City"];
        $Adress= $_POST["Adress"];
        $Category=$_POST["Category"];
        


        $sql="INSERT INTO suppliers (CompanyName,Country,City,Adress,Phone,Email,Category) VALUES ('$CompanyName','$Country','$City','$Adress','$Phone','$Email','$Category')";
        echo $sql;
        echo "</br>";
        $results= mysqli_query($db,$sql);
        if (!$results)
        die('Invalid querry:' .mysqli_error($db));
        else 
        {echo "Inregistrarea a fost adaugata.</br>";}

    }


?>
   <?php include 'footer.php'; ?>