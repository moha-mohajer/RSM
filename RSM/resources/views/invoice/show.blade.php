@extends('layouts.app')

@section('content')
  <br><p><a href="/invoice" class="btn btn-defult">Go Back</a></p>
  <h1>create on {{$invoice->created_at}}</h1>
  <div>
    {{-- Cusomer ID: {!!$invoice->cid!!} --}}
   <a href="/user/{{$invoice->cid}}">Cusomer ID: {!!$invoice->cid!!}</a>
  </div>
  <div>
    {{-- Srvice ID: {!!$invoice->sid!!} --}}
    <a href="/service/{{$invoice->sid}}">Service ID: {!!$invoice->sid!!}</a>
  </div>
  <div>
    {{-- Item ID: {!!$invoice->iid!!} --}}
    <a href="/item/{{$invoice->iid}}">Item ID: {!!$invoice->iid!!}</a>
  </div>
  <div>
    VAT: {!!$invoice->tax!!}
  </div>
  <div>
    total {!!$invoice->total!!}
  </div>
  <div>
    SN: {!!$invoice->dicount!!}
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