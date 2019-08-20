@extends('layouts.app')

@section('content')
<br>
  <h1>Add a New Item</h1>
  {{ Form::open(['action' => 'itemController@store', 'method' =>'POST']) }}<br>
    <div class="form-group">
      {{form::label('obid','Order ')}}
      @if (count($selectOrder) > 0)
        <p>{{form::select('obid',$selectOrder, ['class'=>'form-group'])}} </p>
      @else
        <h3><p class="text-danger">No Order found. You must add a Order first.</p></h3>
      @endif
      <p><a href="/order/create" target="_blank" class="btn btn-defult">Add a new order</a></p> 
    </div>
    <div class="form-group">
      {{form::label('sn','SN')}}
      {{form::text('sn','',['class'=>'form-control','placeholder'=>'Serial Number'])}}
    </div>
    <div class="form-group">
      {{form::label('supid','Suplier')}}
      {{-- @if (count($selectSuplier) > 0)
        <p>{{form::select('supid',$selectUser, ['class'=>'form-group'])}} </p>
      @else
        <h3><p class="text-danger">No Order found. You must add a Suplier first.</p></h3>
      @endif
      <p><a href="/user/create" target="_blank" class="btn btn-defult">Add a new Suplier</a></p> 
      {{form::text('supid','',['class'=>'form-control','placeholder'=>'Suplier Id'])}} --}}
    </div>
    <div class="form-group">
      {{form::label('cpr','Retail Pricetal')}}
      {{Form::number('cpr','',['step' => '0.01','min' => '0.00', 'class'=>'form-control','placeholder' =>'0.00$'])}}
    </div>
    <div class="form-group">
      {{form::label('vat','VAT Pricetal')}}
      {{Form::number('vat','',['step' => '0.01','min' => '0.00', 'class'=>'form-control','placeholder' =>'0.00$'])}}
    </div>
    <div class="form-group">
      <br><p>
      {{form::label('Confrmed','Confrmed')}}    {{form::checkbox('cc', now(), false)}} &nbsp
      {{form::label('Cancled','Cancled')}}    {{form::checkbox('cancled', now(), false)}} &nbsp
      {{form::label('Ordered','Ordered')}}    {{form::checkbox('ordered', now(), false)}} &nbsp
      {{form::label('Arrived','Arrived')}}    {{form::checkbox('arrived', now(), false)}}  &nbsp
      {{form::label('Sold','Sold')}}    {{form::checkbox('Sold', now(), false)}}
      {{form::label('Stors','SoStoredld')}}    {{form::checkbox('stored', now(), false)}}
      <br>
    </div>
    <div class="form-group">
        {{form::hidden('uid','',['class'=>'form-control','placeholder' =>'User ID'])}}
    </div>
    <div class="form-group">
        {{form::label('note','Note')}}
        {{form::textarea('note','',['id'=> 'article-ckeditor','class'=>'form-control','placeholder'=>'Ditails'])}}
    </div>
    {{form::submit('submit', ['class'=> ' btn btn-prymary'])}}
  {{ Form::close() }}
@endsection