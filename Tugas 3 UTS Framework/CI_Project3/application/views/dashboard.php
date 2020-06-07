<!DOCTYPE html>
<html>
  <head>
    <title>Tugas CI</title>
    <!-- load css boostrap -->
    <link href="<?= base_url() . 'assets/assetDashboard/css/bootstrap.min.css'?>" rel="stylesheet">
    <link href="<?= base_url() . 'assets/assetDashboard/css/dashboard.css'?>" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Framework CI 3</a>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">

          <div class="sidebar-sticky">
          <br>
          <p style="text-align: center; margin-top: 10%;">Kholilul Rachman NM</p>
          <p style="text-align: center;">17081010055</p>
            
            <ul class="nav flex-column" style="margin-top:10%;">
            
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

          <h2 style="margin: 30px 0 30px 0;">Database Airports</h2>
          <div class="table-responsive">
              <div class="row">
                <div class="col">
                <!--Tampilkan pagination-->
                <?php echo $pagination; ?>
              </div>
            </div>
            <table class="table table-striped table-sm" style="margin-top: -10%">
              <thead>
                <tr>
                  	 <th>Code</th>  
                     <th>Name</th>  
                     <th>cityCode</th> 
                     <th>cityName</th> 
                     <th>Country Name</th>  
                     <th>Country Code</th>
                     <th>timezone</th>
                     <th>Iat</th>
                     <th>Ion</th>
                     <th>num Airports</th>
                     <th>City</th>
                     <th>Update</th>
                     <th>Delete</th>
                </tr>
              </thead>
              <tbody>
		<?php  
           if($data->num_rows() > 0)  
           {  
                foreach($data->result() as $row)  
                {  
           ?>  
                <tr>  
                     <td><?php echo $row->code; ?></td>  
                     <td><?php echo $row->name; ?></td>  
                     <td><?php echo $row->cityCode; ?></td>
                     <td><?php echo $row->cityName; ?></td>
                     <td><?php echo $row->countryName; ?></td>
                     <td><?php echo $row->countryCode; ?></td>
                     <td><?php echo $row->timezone; ?></td>
                     <td><?php echo $row->lat; ?></td>
                     <td><?php echo $row->lon; ?></td>
                     <td><?php echo $row->numAirports; ?></td>
                     <td><?php echo $row->city; ?></td>
                     <td><a href="<?php echo base_url('home/edit/' . $row->code) ?>" class="btn btn-outline-warning btn-sm">Update</a></td>
                      &nbsp;&nbsp;
                     <td><a href="<?php echo base_url('home/delete_data/'. $row->code) ?>" class="btn btn-outline-danger btn-sm">Delete</a></td>
                    
                </tr>  
           <?php       
                }  
           }  
           else  
           {  
           ?>  
                <tr>  
                     <td colspan="5">No Data Found</td>  
                </tr>  
           <?php  
           }  
           ?> 
              </tbody>
            </table>


          </div>
      
        </main>
      </div>
    </div>

    <script src="<?= base_url() . 'assets/assetDashboard/js/jquery.js'?>"></script>
    <script src="<?= base_url() . 'assets/assetDashboard/js/bootstrap.js'?>"></script>
  </body>
</html>

