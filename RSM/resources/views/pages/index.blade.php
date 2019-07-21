@extends('layouts.app')


@section('content')



  <body class="backPic">
    {{-- <h1>{{$title}}</h1> --}}
    <!-- <h1 id="indexH1"><?php echo $title; ?></h1> -->

    <H1 id="indexH1">Welcome to</H1>
    <H2 id="indexH1">Repair Services Management</H2>

    <link rel="stylesheet" href="<?php echo asset('css/custom.css')?>" type="text/css"> 

      <!-- Sidebar -->
  
  
      <!-- Page Content -->
  <div id="page-content-wrapper">
    

  <div class="container">

    <!-- /#sidebar-wrapper -->
     <div class="card-columns">
        <div class="card bg-light">
          <div class="card-body text-center">
            <a class="card-text" href="/ticket/create">Create Ticket </a>
          </div>
        </div>
        <div class="card bg-light">
          <div class="card-body text-center">
          <a class="card-text" href="/item/create">Create item</a>
          </div>
        </div>
        <div class="card bg-light">
          <div class="card-body text-center">
          <a class="card-text" href="/order/create">Create Order</a>
          </div>
        </div>
        <div class="card bg-light">
          <div class="card-body text-center">
          <a class="card-text" href="/device/create">Create Device</a>
          </div>
        </div>  
        <div class="card bg-light">
          <div class="card-body text-center">
          <a class="card-text" href="/invoice/create">Create invoice</a>
          </div>
        </div>
        <div class="card bg-light">
          <div class="card-body text-center">
          <a class="card-text" href="/service/create">Create service</a>
          </div>
        </div>
      </div>
  </div>


  <div class="container">
     <div class="card-columns">
        <div class="card bg-light">
          <div class="card-body text-center">
          <a class="" href="/ticket">Tickets</a>
          </div>
        </div>
        <div class="card bg-light">
          <div class="card-body text-center">
          <a class="" href="/item">Items</a>
          </div>
        </div>
        <div class="card bg-light">
          <div class="card-body text-center">
          <a class="" href="/order">Orders</a>
          </div>
        </div>
        <div class="card bg-light">
          <div class="card-body text-center">
          <a class="" href="/device">Devices</a>
          </div>
        </div>  
        <div class="card bg-light">
          <div class="card-body text-center">
          <a class="" href="/invoice">Invoices</a>
          </div>
        </div>
        <div class="card bg-light">
          <div class="card-body text-center">
          <a class="" href="/service">Service</a>
          </div>
        </div>
      </div>
  </div>
  </div>
  <!-- /#page-content-wrapper -->
</body>
@endsection
