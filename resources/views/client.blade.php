<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PCMD | Admin</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<div class="row d-flex justify-content-center" >
<div class="col-lg-2 col-3">
  <!-- small box -->
  <div class="small-box bg-primary">
    <div class="inner">
    <i class="fas fa-clock"></i>
    <p><a href="demandpage" style="color:white;font-size:1.5rem">Demandes</a></p>
    </div>
    <div class="icon">
      <i class="ion ion-bag"></i>
    </div>
  </div>
</div>
<!-- ./col -->
<div class="col-lg-2 col-3">
  <!-- small box -->
  <div class="small-box bg-primary">
    <div class="inner">
    <i class="fas fa-money-check size:5x"></i>
    <p><a href="paiement" style="color:white;font-size:1.5rem">Paiements</a></p>
    </div>
    <div class="icon">
      <i class="ion ion-bag"></i>
    </div>
  </div>
</div>
<!-- ./col -->
<div class="col-lg-2 col-3">
  <!-- small box -->
  <div class="small-box bg-primary">
    <div class="inner">
    <i class="fas fa-folder"></i>
      <p><a href="telecharger_document" style="color:white;font-size:1.5rem">Documents</a></p>
    </div>
    <div class="icon">
      <i class="ion ion-bag"></i>
    </div>
  </div>
</div>
<!-- ./col -->
<div class="col-lg-2 col-3">
  <!-- small box -->
  <div class="small-box bg-primary">
    <div class="inner">
      <i class="fas fa-receipt"></i>
      <p><a href="#" style="color:white;font-size:1.5rem">Factures</a></p>
    </div>
    <div class="icon">
      <i class="ion ion-bag"></i>
    </div>
  </div>
</div>
<!-- ./col -->
</div>

</div>
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
</body>
</html>
</x-app-layout>