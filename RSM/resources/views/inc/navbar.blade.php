<nav class="navbar navbar-expand-md navbar-dark bg-dark ">
        <a class="navbar-brand" href="/">{{config('app.name', 'LSAPP')}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li><a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            <li><a class="nav-link" href="/about">About</a></li> 
            <li><a class="nav-link" href="/services">Services</a></li>
            </ul>
          <ul class = " nav navbar-nav navbar-right">
             <li><a class="nav-link" href="/ticket/create">Create Ticket</a></li>
             <li><a class="nav-link" href="/item/create">Create item</a></li>
             <li><a class="nav-link" href="/order/create">Create Order</a></li>
             <li><a class="nav-link" href="/device/create">Create Device</a></li>
             <li><a class="nav-link" href="/invoice/create">Create invoice</a></li>
             <li><a class="nav-link" href="/service/create">Create service</a></li>
          </ul>
          <ul class = " nav navbar-nav navbar-right">
              <li><a class="nav-link" href="/ticket">Tickets</a></li>
              <li><a class="nav-link" href="/item">Items</a></li>
              <li><a class="nav-link" href="/order">Orders</a></li>
              <li><a class="nav-link" href="/device">Devices</a></li>
              <li><a class="nav-link" href="/invoice">Invoices</a></li>
              <li><a class="nav-link" href="/service">Service</a></li>
           </ul>
        </div>
      </nav>