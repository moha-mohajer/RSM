@extends('layouts.app')

@section('content')
<br>
  <h1>Add a New Ticket</h1>
  {{ Form::open(['action' => 'ticketController@store', 'method' =>'POST']) }}
    <div class="form-group">
      {{form::search('customer_id','',['class'=>'form-control','placeholder'=>'Customer ID'])}}
      <a href="/user/create" target="_blank" class="btn btn-defult">Add a new customer </a>
    </div>
    <div class="form-group">
      {{form::label('device_id','Device')}}
      {{form::search('device_id','',['class'=>'form-control','placeholder'=>'Device ID'])}}
      <a href="/device/create" target="_blank" class="btn btn-defult">Add a new Device</a>
    </div>
    <div class="form-group">
      {{form::label('description','Description')}}
      {{form::text('description','',['class'=>'form-control','placeholder'=>'Isuses Description'])}}
    </div>
    <div class="form-group">
      {{form::label('security_type','Security Type')}}
      {{form::text('security_type','',['class'=>'form-control','placeholder'=>'Password, Pincode, Pattern'])}}
    </div>
    <div class="form-group">
      {{form::label('security_code','Security Code')}}
      {{form::text('security_code','',['class'=>'form-control','placeholder'=>'Security Code'])}}
    </div>
    <div class="form-group">
      {{form::label('Belonging','Belonging')}}
      {{form::text('Belonging','',['class'=>'form-control','placeholder'=>'Bag, cover, battary, Ac adaper'])}}
    </div>
    <div class="form-group">
      {{form::label('si','Service Tag')}}
      {{form::text('si','',['class'=>'form-control','placeholder'=>'Service Tag'])}}
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
