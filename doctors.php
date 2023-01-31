 
<?php

require_once("connection.php");

if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {

    redirect("index.php");
}

include 'headerlogged.php';

?>
 <?php
   
$nume=$_POST['LastName'];
$prenume=$_POST['FirstName'];
$npoza=$_FILES["file"]["name"];
$db=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($db,"nova_clinic");

  if ($_FILES["file"]["error"] > 0)
			{
			echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
			}
		else
    {
	
	
			echo "Fisier Uploadat: " . $_FILES["file"]["name"] . "<br />";
			echo "Tipul: " . $_FILES["file"]["type"] . "<br />";
			echo "Dimensiunea: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
			echo "Fisierul temporar: " . $_FILES["file"]["tmp_name"] . "<br />";


			if (file_exists($_FILES["file"]["name"]))
			  {
                echo $_FILES["file"]["name"] . " Imaginea exista deja! Incearca sa schimbi numele !. ";
              }
              else
              {
	  		    if(mkdir($nume ."/" , 0777)) 
                  { 
                   echo "Directorul ".$nume." a fost creat cu succes"; 
                   move_uploaded_file($_FILES["file"]["tmp_name"],$nume."/".$_FILES["file"]["name"]);
				   $imagine=$nume."/".$_FILES["file"]["name"];
				   $sql="INSERT INTO doctors (LastName,FirstName,Image) VALUES ('$nume','$prenume','$imagine')";
				   $result= mysqli_query($db,$sql);
					if (!$result)
					 die('Invalid querry:' .mysqli_error($db));
					 else 
					 {echo "<br>Inregistrare adaugata ";
					  $sql1="SELECT * FROM doctors order by LastName ASC"; 
					  $result1= mysqli_query($db,$sql1);
    			      if (!$result1)
						 die('Invalid querry:' .mysql_error($db));
						 else 
						 {

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
                                  <?php while ($myrow=mysqli_fetch_array($result1,MYSQLI_ASSOC))
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

							<?php
						 }
					  
					 }
					 
					 
                  } 
                 else 
                  { 
                   echo "Am intampinat eroare in crearea directorului"; 
                  } 
              }
    }
?> 

<?php include 'footer.php'; ?>
