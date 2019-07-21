@extends('layouts.app')

@section('content')
<br>
  <h1>Add a New Item</h1>
  {{ Form::open(['action' => 'itemController@store', 'method' =>'POST']) }}
    <div class="form-group">
      {{form::label('obid','Order')}}
      {{form::text('obid','',['class'=>'form-control','placeholder'=>'Order ID'])}}
    </div>
  <div class="form-group">
    {{form::label('sn','SN')}}
    {{form::text('sn','',['class'=>'form-control','placeholder'=>'Serial Number'])}}
  </div>
  <div class="form-group">
    {{form::label('supid','Suplier')}}
    {{form::text('supid','',['class'=>'form-control','placeholder'=>'Suplier Id'])}}
  </div>
  <div class="form-group">
    {{form::label('cpr','Retail Pricetal')}}
    {{form::number('cpr','',['class'=>'form-control','placeholder' =>'0.00$'])}}
  </div>
  <div class="form-group">
      <br><p><a href="/item" class="btn btn-prymary">Confrmed</a>
      <a href="/item" class="btn btn-prymary">Cancled</a>
      <a href="/item" class="btn btn-prymary">Ordered</a>
      <a href="/item" class="btn btn-prymary">Arrived</a>
      <a href="/item" class="btn btn-prymary">Sold</a>
      <a href="/item" class="btn btn-prymary">stored</a>
      <br>
  </div>
  <div class="form-group">
      {{form::label('uid','User ID')}}
      {{form::number('uid','',['class'=>'form-control','placeholder' =>'User ID'])}}
  </div>
  <div class="form-group">
      {{form::label('note','Note')}}
      {{form::textarea('note','',['id'=> 'article-ckeditor','class'=>'form-control','placeholder'=>'Ditails'])}}
  </div>
    {{form::submit('submit', ['class'=> ' btn btn-prymary'])}}
  {{ Form::close() }}
@endsection