<?php

require_once("connection.php");

if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {

    redirect("index.php");
}

include 'headerlogged.php';

?>
<script>  
function validateform(){  
var LastName=document.myform.LastName.value;  
var FirstName=document.myform.FirstName.value;  
  
if (LastName==null || LastName==""){  
  alert("Câmpul nume nu poate să nu conțină date");  
  return false;  
}else if (FirstName==null || FirstName==""){  
  alert("Câmpul prenume nu poate să nu conțină date");  
  return false;  
}else if(FirstName.length<4 || LastName.length<4){  
  alert("Numele si prenumele trebuie să conțină cel puțin 4 caractere");  
  return false;  
  }    

  var num=document.myform.Phone.value;
  if (num==null || num==""){  
  alert("Câmpul telefon nu poate să nu conțină date");  
  return false;  
} else if (isNaN(num)){  
  document.getElementById("numloc").innerHTML="Introduceti doar valori numerice";  
  return false;  
}else{  
  return true;  
  }  

  var x=document.myform.Email.value; 
  if (x==null || x==""){  
  alert("Câmpul email nu poate să nu conțină date");  
  return false;  
} else { 
var atposition=x.indexOf("@");  
var dotposition=x.lastIndexOf(".");  
if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
  alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
  return false;  
  }
}
}  
</script>  

    <!--APPOINTMENT-->
<section id="schedule.html">
    <div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3 border p-4 shadow bg-light">
            <div class="col-12">
                <h3 class="fw-normal text-secondary fs-4 text-uppercase mb-4">Programati-va la medic</h3>
            </div>
            <form method="post" action="adauga.php" name="myform" onsubmit="return validateform()">
                <div class="row g-3">
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="LastName" placeholder="Nume">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="FirstName" placeholder="Prenume">
                    </div>
                    <div class="col-md-6">
                        <input type="tel" class="form-control" name= "Phone" placeholder="Numar de Telefon"><span id="numloc"></span>
                    </div>
                    <div class="col-md-6">
                        <input type="email" class="form-control" name = "Email" placeholder="Email">
                    </div>
                    <div class="col-md-6">
                        <input type="date" class="form-control" name="Date" placeholder="Introduceti data">
                    </div>
                    <div class="col-md-6">
                        <input type="time" class="form-control" name= "Time" placeholder="Introduceti ora">
                    </div>
                    <div class="col-12">
                        <select class="form-select" name="Speciality">
                            <option selected>Alegeti programarea</option>
                            <option value="Alergologie">Alergologie</option>
                            <option value="Cardiologie">Cardiologie</option>
                            <option value="Dermatologie">Dermatologie</option>
                            <option value="Oftalmologie">Oftalmologie</option>
                            <option value="Ginecologie">Ginecologie</option>
                            <option value="Urologie">Urologie</option>
                            <option value="Chirurgie generala">Chirurgie generala</option>
                            <option value="Ortopedie">Ortopedie</option>
                            <option value="Reumatologie">Reumatologie</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <textarea class="form-control" name="Message" placeholder="Message"></textarea>
                    </div>
                    <div class="col-12 mt-5">                        
                        <button type="submit" class="btn btn-primary float-end" name="Submit" value="Submit">Programeaza</button>
                        <a href="schedule.html"><button type="button" class="btn btn-outline-secondary float-end me-2">Anuleaza</button>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</section>
<!--//APPOINTMENT-->
<?php include 'footer.php'; ?>