<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Dashboard Template · Bootstrap v4.6</title>


    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
<link href="assets//css/bootstrap.min.css" rel="stylesheet">



    <style>
  
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
       
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      body{
        background-image: linear-gradient(to right, skyblue , white);
      }
   
    </style>

    
    <!-- Custom styles for this template -->
    <link href="asset/css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    


    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
   
        <h1 class="h2">DATA PELANGGAN</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
         
        </div>
      </div>
      <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            
        </div>
      </div>
      </div>
      <h2></h2>
      <div class="table-responsive">
        
      <a href="beranda.php" class="btn btn-warning ">Beranda</a>
      <a href="datapelanggan.php" class="btn btn-warning">Data Pelanggan</a>
      <a href="dashboard.php" class="btn btn-warning">Data Barang</a>
      <a href="aksi_logout.php" class="btn btn-danger">Keluar</a>
      </div>
      <div class="card mt-2">
        <div class="card-body">
        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#modalRegisterForm">Tambah Data</a>
          <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" 
          data-bs-target="#tambah_data">Tambah Data</button> -->
    </div>
   
    <form action="proses_penjualan.php" method="post">
    <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Tambah Data Barang</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="orangeForm-name">ID Pelanggan</label>
          <input type="text" name="PelangganID" value="<?php echo date("dmHis") ?>" class="form-control validate">
          
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="orangeForm-email">Nama Pelanggan</label>
          <input type="text" name="NamaPelanggan" class="form-control validate">
          
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="orangeForm-pass">Alamat</label>
          <input type="text" name="Alamat" class="form-control validate">
          
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="orangeForm-pass">No. Telepon</label>
          <input type="text" name="NomorTelpon" class="form-control validate">
          
        </div>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar
    </button>
    <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
      </div>
    </div>
  </div>


<div class="text-center">

      <h2></h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr> 
              <th>No</th>
              <th>ID Pelanggan</th>
              <th>Nama Pelanggan</th>
              <th>Alamat</th>
              <th>No. Telepon</th>
              <th>Total Pembayaran</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
          <?php
      include 'koneksi.php';
      $tampil_data=mysqli_query($connection,"SELECT * FROM pelanggan INNER JOIN penjualan ON pelanggan.PelangganID=penjualan.PelangganID");
      $no=0;
      while($row=mysqli_fetch_array($tampil_data)){
      $no++
      ?>
            <tr>
            <td><?php echo $no?></td>
             <td><?php echo $row['PelangganID']?></td>
              <td><?php echo $row['NamaPelanggan']?></td>
              <td><?php echo $row['Alamat']?></td>
              <td><?php echo $row['NomorTelpon']?></td>
              <td>Rp. <?php echo $row['TotalHarga']?></td>
              <td>
              <a class="btn btn-info btn-sm" href="pembelian.php?PelangganID=<?php echo $row ['PelangganID'];?>">Pembelian</a>  
              <a class="btn btn-warning btn-sm" href="edit_pelanggan.php?PelangganID=<?php echo $row ['PelangganID'];?>">UBAH</a>  
              <a class="btn btn-danger btn-sm" href="aksi-delete_penjualan.php?ID=<?php echo $row ['PelangganID'];?>">HAPUS</a>  
            </td> 
      </tr>

  
          </tbody>
          <?php
      }
          ?>
        </table>
      </div>
    </main>
  </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="js/vendor/jquery.slim.min.js"><\/script>')</script>
      <script src="js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
        <script src="js/dashboard.js"></script>
  </body>
</html>