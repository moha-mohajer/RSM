<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3 col-md-2 sidebar">
        <div class="accordion" id="accordion">
          <ul class="nav nav-sidebar">
            <li class="active"><a class="active" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" href="#">
                New
            </a></li>
            <li><a data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" href="#">
                View
            </a></li>
            <li><a href="#">?</a></li>
          </ul>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body">
            <ul class = " nav navbar-nav ">
              <li><a class="nav-link" href={{ route('register') }}>Register a User</a></li>
              <li><a class="nav-link" href="/ticket/create">Register a Ticket</a></li>
              <li><a class="nav-link" href="/item/create">Register an item</a></li>
              <li><a class="nav-link" href="/order/create">Register an Order</a></li>
              <li><a class="nav-link" href="/device/create">Register a Device</a></li>
              <li><a class="nav-link" href="/invoice/create">Register an invoice</a></li>
              <li><a class="nav-link" href="/service/create">Register a service</a></li>
            </ul>
          </div>
        </div>    

        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
          <div class="card-body">
            <ul class = " nav navbar-nav">
              <li><a cl\ass="nav-link" href="/User">Users</a></li>
              <li><a cl\ass="nav-link" href="/ticket">Tickets</a></li>
              <li><a class="nav-link" href="/item">Items</a></li>
              <li><a class="nav-link" href="/order">Orders</a></li>
              <li><a class="nav-link" href="/device">Devices</a></li>
              <li><a class="nav-link" href="/invoice">Invoices</a></li>
              <li><a class="nav-link" href="/service">Service</a></li>
            </ul>
          </div>  
        </div>
     
      </div>  
    </div>


