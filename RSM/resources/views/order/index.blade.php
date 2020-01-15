@extends('layouts.app')
<br>
@section('content')
  <h1>Orders</h1>
  @if (count($orders) > 0)
    @foreach ($orders as $order)
        <div class="well">
            <p>
              <h3><a href="/order/{{$order->id}}">create on {{$order->created_at}}</a></h3>
              <small>{{$order->id}}</small>
            </p><br>
        </div>
    @endforeach
     {{$orders->links()}}
  @else
  <p>No order found</p>    
  @endif
@endsection