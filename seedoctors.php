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


$DocID = $FirstName = $LastName= $Image = "";


  
$start=0;
$limit=2;
$id=1;
if(isset($_GET['id']))
{
$id=$_GET['id'];
$start=($id-1)*$limit;
}



$sql1="SELECT * FROM doctors order by LastName ASC LIMIT $start, $limit"; 
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

$rows= mysqli_num_rows(mysqli_query($db,"SELECT * FROM doctors "));
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
</br>
</br>
</br>
</br>


 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>