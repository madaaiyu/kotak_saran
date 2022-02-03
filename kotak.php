<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="assets/css/index.css" rel="stylesheet">
    <title>Kotak saran peserta didik</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Kotak saran peserta didik</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
  </div>
</nav>
<div class="position-relative">
<form action="kotak.php" method="post">
	
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-center">
          <h2 class="section-heading text-uppercase h5">Form</h2>
          <h3 class="section-subheading text-muted h5">Pengisian Saran</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                 <input type="hidden" name="id_p" >
                 <label class="form-label">Nama</label>
                 <input type="text" name="pelapor" class="form-control" aria-describedby="emailHelp">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                <label class="form-label">Isi saran</label>
                <textarea class="form-control" name="isi_saran" placeholder="Silahkan isikan saran anda disini" style="height: 100px"></textarea>
                  <p class="help-block text-danger"></p>
                </div>

              </div>
              <div class="col-md-6">
               
              </div>
              <div class="clearfix"></div>
              <div class="col-md-6 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-dark btn-xl text-uppercase" type="submit" name="submit" >Kirim</button>
              </div>
              
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  </form>
</div>

<?php

include("control2.php");
if(isset($_POST['submit'])){
    $id_p = $_POST['id_p'];
    $pelapor = $_POST['pelapor'];
    $isi_saran = $_POST['isi_saran'];

    $control2 = new control2();
    $create = $control2->saran($id_p,$pelapor,$isi_saran);
    if($create){
        header("location:kotak.php");
    }
}
?>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
