<?php

require_once("connection.php");

if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {

    redirect("index.php");
}

include 'headerlogged.php';

?>

    <!--APPOINTMENT-->
<section id="schedule.html">
    <div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3 border p-4 shadow bg-light">
            <div class="col-12">
                <h3 class="fw-normal text-secondary fs-4 text-uppercase mb-4">Adaugati un nou furnizor</h3>
            </div>
            <form method="post" action="AddNewSupplierResult.php">
                <div class="row g-3">
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="CompanyName" placeholder="Numele Companiei">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="Country" placeholder="Tara">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="City" placeholder="Orasul">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="Adress" placeholder="Adresa">
                    </div>
                    <div class="col-md-6">
                        <input type="tel" class="form-control" name= "Phone" placeholder="Numar de Telefon">
                    </div>
                    <div class="col-md-6">
                        <input type="email" class="form-control" name = "Email" placeholder="Email">
                    </div>
                    <div class="col-12">
                        <select class="form-select" name="Category">
                            <option selected>Alegeti categoria</option>
                            <option value="Medicamente">Medicamente</option>
                            <option value="Aparatura">Aparatura</option>
                            <option value="Intretinere">Intretinere</option>
                            <option value="Cantina">Cantina</option>
                            <option value="Mobilier">Mobilier</option>
                        </select>
                    </div>
                    <div class="col-12 mt-5">                        
                        <button type="submit" class="btn btn-primary float-end" name="Submit" value="Submit">Adauga furnizor</button>
                        <a href="AddNewSupplier.php"><button type="button" class="btn btn-outline-secondary float-end me-2">Anuleaza</button>
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