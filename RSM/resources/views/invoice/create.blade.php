@extends('layouts.app')

@section('content')
<br>
  <h1>Add a New Invoice</h1>
  {{ Form::open(['action' => 'invoiceController@store', 'method' =>'POST']) }}
    <div class="form-group">
      {{form::label('customer_id','Customer')}}
      {{form::text('customer_id','',['class'=>'form-control','placeholder'=>'Customet ID'])}}
  </div>
  <div class="form-group">
    {{form::label('service_id','Service')}}
    {{form::text('service_id','',['class'=>'form-control','placeholder'=>'Service ID'])}}

  </div>
  <div class="form-group">
    {{form::label('item_id','Item')}}
    {{form::text('item_id','',['class'=>'form-control','placeholder'=>'Item Number'])}}
  </div>
  <div class="form-group">
    {{form::label('tax','VAT')}}
    {{form::number('tax','',['class'=>'form-control','placeholder'=>'0.00$'])}}
  </div>
  <div class="form-group">
    {{form::label('total','Total')}}
    {{form::number('total','',['class'=>'form-control','placeholder' =>'0.00$'])}}
  </div>
  <div class="form-group">
    {{form::label('dicount','Dicount')}}
    {{form::number('dicount','',['class'=>'form-control','placeholder' =>'0.00$'])}}
  </div>
  <div class="form-group">
    {{form::label('pay','Total Amount')}}
    {{form::number('pay','',['class'=>'form-control','placeholder' =>'0.00$'])}}
  </div>
  <div class="form-group">
      {{form::label('note','Note')}}
      {{form::textarea('note','',['id'=> 'article-ckeditor','class'=>'form-control','placeholder'=>'Ditails'])}}
  </div>
    {{form::submit('submit', ['class'=> ' btn btn-prymary'])}}
  {{ Form::close() }}
@endsection