<?php
include_once 'layout/header.php';
include_once 'layout/sidebar.php';

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>PROGRAM TEKNIK INFORMATIKA</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-body">
          <?php include_once'prodi/var1.php'?>
        </div>
        <!-- /.card-body -->

    </section>
    <!-- /.content -->
  </div>

<?php 
include_once 'layout/footer.php'
?>