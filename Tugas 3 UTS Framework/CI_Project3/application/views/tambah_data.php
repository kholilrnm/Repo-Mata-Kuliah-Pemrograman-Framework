<!DOCTYPE html>
<html>
  <head>
    <title>Tugas CI</title>
    <!-- load css boostrap -->
    <link href="../assets/assetDashboard/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/assetDashboard/css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Framework CI 3</a>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column" style="margin-top:100px;">
               <li class="nav-item">
                <a class="nav-link active" href="<?php echo base_url('home'); ?>">Data Airports</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('home/tambah'); ?>">Tambah Data</a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">


          <h2 style="margin: 30px 0 30px 0;">Form Insert Data</h2>
          <form action="<?php echo 'add' ?>" method="POST">
            
            <div class="form-group">
              <label>Code</label>
              <input type="text" class="form-control" placeholder="Code Airports" name="code" required="required">
            </div>
            <div class="form-group">
              <label>Name</label>
              <input type="text" class="form-control" placeholder="Name Airport" name="name" required="required">
            </div>
            <div class="form-group">
              <label>City Code</label>
              <input type="text" class="form-control" placeholder="City Code" name="cityCode" required="required">
            </div>
            <div class="form-group">
              <label>City Name</label>
              <input type="text" class="form-control" placeholder="City Name" name="cityName" required="required">
            </div>
            <div class="form-group">
              <label>Country Name</label>
              <input type="text" class="form-control" placeholder="Country Name" name="countryName" required="required">
            </div>
            <div class="form-group">
              <label>Country Code</label>
              <input type="text" class="form-control" placeholder="Country Code" name="countryCode" required="required">
            </div>
            <div class="form-group">
              <label>Timezone</label>
              <input type="text" class="form-control" placeholder="Timezone" name="timezone" required="required">
            </div>
            <div class="form-group">
              <label>Lat</label>
              <input type="text" class="form-control" placeholder="Lat" name="lat" required="required">
            </div>
            <div class="form-group">
              <label>Lon</label>
              <input type="text" class="form-control" placeholder="Lon" name="lon" required="required">
            </div>
            <div class="form-group">
              <label>Num Airports</label>
              <input type="text" class="form-control" placeholder="Num Airports" name="numAirports" required="required">
            </div>
            <div class="form-group">
              <label>City</label>
              <select class="custom-select" name="city" required="required">
                <option value="">Pilih Salah Satu</option>
                <option value="true">True</option>
                <option value="false">False</option>
              </select>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
          <br><br><br><br>
        </main>
      </div>
    </div>

    <script src="../assets/assetDashboard/js/jquery.js"></script>
    <script src="../assets/assetDashboard/js/bootstrap.js"></script>
  </body>
</html>