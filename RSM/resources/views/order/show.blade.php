@extends('layouts.app')

@section('content')
  <br><p><a href="/order" class="btn btn-defult">Go Back</a></p>
  <h1>create on {{$order->created_at}}</h1>
  <div>
      {{-- Customer: {!!$order->customer_id!!} --}}
      <a href="/user/{{$order->customer_id}}">Cusomer ID: {!!$order->customer_id!!}</a>
  <div>
      {{-- Customer Confrmation On: {!!$order->customer_confirmation!!} --}}
      <a href="/device/{{$order->device_id}}">Device ID: {!!$order->device_id!!}</a>
  </div>
  <div>
     Isuse Description ID: {!!$order->customer_id!!}
    <div>
      Color: {!!$order->Color!!}
    </div>
    <div>
      Color: {!!$order->part_number!!}
    </div>
    <div>
      Unit Measurment: {!!$order->UnitMeasurment!!}
    </div>
    <div>
      Quantity: {!!$order->quantity!!}
    </div>
  <div>
      User ID: {!!$order->user_id!!}
  </div>
  <div>
    Note: {!!$order->note!!}
  </div>
  <hr>
  <small>Updated at {{$order->updated_at}}</small>
  <hr>
  <a href="/order/{{$order->id}}/edit" class="btn btn-defult">Edit</a>

  {!!Form::open(['action'=>['orderController@destroy', $order->id],'method'=>'POST', 'class' =>"pull-right"])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
  {!!Form::close()!!}
@endsection