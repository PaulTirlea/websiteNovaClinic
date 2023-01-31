<?php

require_once("connection.php");

if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {

    redirect("index.php");
}

include 'headerlogged.php';

?>
<style>
   body{background-color: #EEEEEE}a{text-decoration: none !important}.card-product-list, .card-product-grid{margin-bottom: 0}.card{width: 500px;position: relative;display: -webkit-box;display: -ms-flexbox;display: flex;-webkit-box-orient: vertical;-webkit-box-direction: normal;-ms-flex-direction: column;flex-direction: column;min-width: 0;word-wrap: break-word;background-color: #fff;background-clip: border-box;border: 1px solid rgba(0, 0, 0, 0.1);border-radius: 23px;margin-top: 50px}.card-product-grid:hover{-webkit-box-shadow: 0 4px 15px rgba(153, 153, 153, 0.3);box-shadow: 0 4px 15px rgba(153, 153, 153, 0.3);-webkit-transition: .3s;transition: .3s}.card-product-grid .img-wrap{border-radius: 0.2rem 0.2rem 0 0;height: 220px}.card .img-wrap{overflow: hidden}.card-lg .img-wrap{height: 280px}.card-product-grid .img-wrap{border-radius: 0.2rem 0.2rem 0 0;height: 275px;padding: 16px}[class*='card-product'] .img-wrap img{height: 100%;max-width: 100%;width: auto;display: inline-block;-o-object-fit: cover;object-fit: cover}.img-wrap{text-align: center;display: block}.card-product-grid .info-wrap{overflow: hidden;padding: 18px 20px}[class*='card-product'] a.title{color: #212529;display: block}.rating-stars{display: inline-block;vertical-align: middle;list-style: none;margin: 0;padding: 0;position: relative;white-space: nowrap;clear: both}.rating-stars li.stars-active{z-index: 2;position: absolute;top: 0;left: 0;overflow: hidden}.rating-stars li{display: block;text-overflow: clip;white-space: nowrap;z-index: 1}.card-product-grid .bottom-wrap{padding: 18px;border-top: 1px solid #e4e4e4}.bottom-wrap-payment{padding: 0px;border-top: 1px solid #e4e4e4}.rated{font-size: 10px;color: #b3b4b6}.btn{display: inline-block;font-weight: 600;color: #343a40;text-align: center;vertical-align: middle;-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;background-color: transparent;border: 1px solid transparent;padding: 0.45rem 0.85rem;font-size: 1rem;line-height: 1.5;border-radius: 0.2rem}.btn-primary{color: #fff;background-color: #3167eb;border-color: #3167eb}.fa{color: #FF5722}
</style>

<?php
$db=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($db,"nova_clinic");

$name= "";

   $name = $_POST["name"];
  if (empty($_POST["name"])) 
    {
        $LastnameErr = "Este necesar sa introduceti numele serviciului.";
        echo $LastnameErr;
    } 
    else $sql="SELECT * FROM services where name LIKE '%$name%'";
    
  $result1= mysqli_query($db,$sql);
    if (!$result1)
                         die('Invalid querry:' .mysql_error($db));
                         else 
                         {

                            ?>
                           <div class="row">
                            <?php while ($myrow=mysqli_fetch_array($result1,MYSQLI_ASSOC))
                            { ?>
                           <div class="col-md-3 col-lg-4">
                            <div class="container d-flex justify-content-center">
                                 <figure class="card card-product-grid card-lg"> <a href="#" class="img-wrap" data-abc="true"><?php echo "<img src='".$myrow["image"]."' width=100% height=100%>"; ?></a>
                                     <figcaption class="info-wrap">
                                         <div class="row">
                                             <div class="col-md-9 col-xs-9"> <a href="#" class="title" data-abc="true"><?php echo $myrow["name"];?></a> <span class="rated">Serviciu</span> </div>
                                         </div>
                                     </figcaption>
                                     <div class="bottom-wrap-payment">
                                         <figcaption class="info-wrap">
                                             <div class="row">
                                                 <div class="col-md-9 col-xs-9"> <a href="#" class="title" data-abc="true"><?php echo $myrow["price"];?></a> <span class="rated">Pret</span> </div>
                                             </div>
                                         </figcaption>    
                                     </div>
                                     <div class="bottom-wrap-payment">
                                         <figcaption class="info-wrap">
                                             <div class="row">
                                                 <div class="col-md-12 col-xs-3">
                                                     <div class="rating text-right"><?php echo $myrow["details"];?></div>
                                                 </div>
                                             </div>
                                         </figcaption>    
                                     </div>

                                     <div class="bottom-wrap"> <a href="#" class="btn btn-primary justify-content-center" data-abc="true"> Buy now </a></div>
                                 </figure>
                             </div>
                          </div>
                      <?php } ?>
                   </div>
                      <?php

                        } 
      
?> 
    <?php include 'footer.php'; ?>