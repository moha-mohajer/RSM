@extends('layouts.app')

@section('content')
<br>
  <h1>Add a New Order</h1>
  {{ Form::open(['action' => 'orderController@store', 'method' =>'POST']) }}
    <div class="form-group">
      {{form::label('customer_id','Customer')}}
      {{form::text('customer_id','',['class'=>'form-control','placeholder'=>'Customer ID'])}}
    </div>
    <div class="form-group">
        {{form::label('device_id','Device')}}
        {{form::text('device_id','',['class'=>'form-control','placeholder'=>'Device ID'])}}
    </div>
    <div class="form-group">
        {{form::label('description','Description')}}
        {{form::text('description','',['class'=>'form-control','placeholder'=>'Isuses Description'])}}
    </div>
    <div class="form-group">
        {{form::label('Color','Color')}}
        {{form::text('Color','',['class'=>'form-control','placeholder'=>'Color'])}}
    </div>
    <div class="form-group">
        {{form::label('part_number','Part Number')}}
        {{form::text('part_number','',['class'=>'form-control','placeholder'=>'Part Numbe'])}}
    </div>
    <div class="form-group">
        {{form::label('UnitMeasurment','Measurment')}}
        {{form::text('UnitMeasurment','',['class'=>'form-control','placeholder'=>'Unit Measurment'])}}
    </div>
    <div class="form-group">
        {{form::label('quantity','Quantity')}}
        {{form::text('quantity','',['class'=>'form-control','placeholder'=>'quantity'])}}
    </div> 
  <div class="form-group">
      {{form::label('user_id','User ID')}}
      {{form::number('user_id','',['class'=>'form-control','placeholder' =>'User ID'])}}
  </div>
  <div class="form-group">
      {{form::label('note','Note')}}
      {{form::textarea('note','',['id'=> 'article-ckeditor','class'=>'form-control','placeholder'=>'Ditails'])}}
  </div>
    {{form::submit('submit', ['class'=> ' btn btn-prymary'])}}
  {{ Form::close() }}
@endsection