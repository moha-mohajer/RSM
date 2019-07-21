@extends('layouts.app')

@section('content')
  <br><p><a href="/order" class="btn btn-defult">Go Back</a></p>
  <h1>create on {{$order->created_at}}</h1>
  <div>
      {{-- Customer: {!!$order->cid!!} --}}
      <a href="/user/{{$order->cid}}">Cusomer ID: {!!$order->cid!!}</a>
  <div>
      {{-- Customer Confrmation On: {!!$order->cc!!} --}}
      <a href="/device/{{$order->did}}">Device ID: {!!$order->did!!}</a>
  </div>
  <div>
     Isuse Description ID: {!!$order->cid!!}
    <div>
      Color: {!!$order->Color!!}
    </div>
    <div>
      Color: {!!$order->PN!!}
    </div>
    <div>
      Unit Measurment: {!!$order->UnitMeasurment!!}
    </div>
    <div>
      Quantity: {!!$order->quantity!!}
    </div>
  <div>
      User ID: {!!$order->uid!!}
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