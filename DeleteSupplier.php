<?php

require_once("connection.php");

if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {

    redirect("index.php");
}

include 'headerlogged.php';

?>

 <div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3 border p-4 shadow bg-light">
            <div class="col-12">
                <h3 class="fw-normal text-secondary fs-4 text-uppercase mb-4">Stergeti un furnizor</h3>
            </div>
            <form method="post" action="DeleteSupplierResult.php">
                <div class="row g-3">
                    <div class="col-md-6">
                        <input type="tel" class="form-control" name= "Phone" placeholder="Numar de Telefon">
                    </div>
                    <div class="col-12 mt-5">                        
                        <button type="submit" class="btn btn-primary float-end" name="Submit" value="Submit">Sterge</button>
                        <a href="StergereProgramare.php"><button type="button" class="btn btn-outline-secondary float-end me-2">Anuleaza</button></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
    
<?php include 'footer.php'; ?>