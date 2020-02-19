@extends('layouts.app')

@section('content')
  <br><p><a href="/invoice" class="btn btn-defult">Go Back</a></p>
  <h1>create on {{$invoice->created_at}}</h1>
  <div>
   <a href="/user/{{$invoice->customer_id}}">Cusomer ID: {!!$invoice->customer_id!!}</a>
  </div>
  <div>
    <a href="/service/{{$invoice->service_id}}">Service ID: {!!$invoice->service_id!!}</a>
  </div>
  <div>
    <a href="/item/{{$invoice->item_id}}">Item ID: {!!$invoice->item_id!!}</a>
  </div>
  <div>
    VAT: {!!$invoice->tax!!}
  </div>
  <div>
    total {!!$invoice->total!!}
  </div>
  <div>
    serial_number: {!!$invoice->dicount!!}
  </div>
  <div>
    Total Amount: {!!$invoice->pay!!}
  </div>
  <div>
    Note: {!!$invoice->note!!}
  </div>
  <hr>
  <small>Updated at {{$invoice->updated_at}}</small>
  <hr>
  <a href="/invoice/{{$invoice->id}}/edit" class="btn btn-defult">Edit</a>

  {!!Form::open(['action'=>['invoiceController@destroy', $invoice->id],'method'=>'POST', 'class' =>"pull-right"])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
  {!!Form::close()!!}
@endsection