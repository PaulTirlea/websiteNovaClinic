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
                <h3 class="fw-normal text-secondary fs-4 text-uppercase mb-4">Gasiti medicul </h3>
            </div>
            <form method="post" action="FindDoctorsResult.php" enctype="multipart/form-data">
                <div class="row g-3">
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="LastName" placeholder="Nume">
                    </div>
                     <div class="col-md-6">
                        <input type="text" class="form-control" name="FirstName" placeholder="Prenume">
                    </div>
                    <div class="col-12 mt-5">                        
                        <button type="submit" class="btn btn-primary float-end" name="Submit" value="Trimite">Cauta</button>
                        <a href="FindDoctors.php"><button type="button" class="btn btn-outline-secondary float-end me-2">Anuleaza</button></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



<?php include 'footer.php'; ?>
