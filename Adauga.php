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


$FirstLastName= $LastName= $Phone = $Email = $AppointmentDate = $AppointmentTime = $Speciality = $Message = "";


  if (empty($_POST["LastName"])) 
    {
        $LastNameErr = "Este necesar sa introduceti numele.";
        echo $LastNameErr;
    } 
    elseif (empty($_POST["FirstName"])) 
    {
        $FirstNameErr = "Este necesar sa introduceti prenumele.";
        echo $FirstNameErr;
    } 
    elseif (empty($_POST["Phone"])) 
    {
        $PhoneErr = "Este necesar sa introduceti telefonul.";
        echo $PhoneErr;
    } 
    elseif ($_POST["Speciality"] == "Alegeti programarea" || empty($_POST["Speciality"])) 
    {
        $SpecialityErr = "Este necesar sa introduceti specialitatea.";
        echo $SpecialityErr;
    }
    else
    {
        $LastName = $_POST["LastName"];
        $FirstName = $_POST["FirstName"];
        $Phone = $_POST["Phone"];
        $Email = $_POST["Email"];
        $AppointmentDate = $_POST["Date"];
        $AppointmentTime= $_POST["Time"];
        $Speciality=$_POST["Speciality"];
        $Message=$_POST["Message"];
        


        $sql="INSERT INTO appointments (LastName,FirstName,Phone,Email,AppointmentDate,AppointmentTime,Speciality,Message) VALUES ('$LastName','$FirstName','$Phone','$Email','$AppointmentDate','$AppointmentTime','$Speciality','$Message')";
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