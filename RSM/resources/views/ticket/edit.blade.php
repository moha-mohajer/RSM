@extends('layouts.app')

@section('content')
<br>
  <h1>Edit a Ticket</h1>
  {{ Form::open(['action' => ['ticketController@update', $ticket->id], 'method' =>'POST']) }}
  <div class="form-group">
      {{form::label('customer_id','Customer')}}
      {{form::text('customer_id',$ticket->customer_id,['class'=>'form-control','placeholder'=>'Customer ID'])}}
    </div>
    <div class="form-group">
        {{form::label('device_id','Device')}}
        {{form::text('device_id',$ticket->device_id,['class'=>'form-control','placeholder'=>'Device ID'])}}
    </div>
    <div class="form-group">
        {{form::label('description','Description')}}
        {{form::text('description',$ticket->description,['class'=>'form-control','placeholder'=>'Isuses Description'])}}
    </div>
    <div class="form-group">
        {{form::label('security_type','Security Type')}}
        {{form::text('security_type',$ticket->security_type,['class'=>'form-control','placeholder'=>'Password, Pincode, Pattern'])}}
    </div>
    <div class="form-group">
        {{form::label('security_code','Security Code')}}
        {{form::text('security_code',$ticket->security_code,['class'=>'form-control','placeholder'=>'Security Code'])}}
    </div>
    <div class="form-group">
        {{form::label('Belonging','Belonging')}}
        {{form::text('Belonging',$ticket->UnitMeasurment,['class'=>'form-control','placeholder'=>'Bag, cover, battary, Ac adaper'])}}
    </div>
    <div class="form-group">
        {{form::label('si','Service Tag')}}
        {{form::text('si',$ticket->quantity,['class'=>'form-control','placeholder'=>'Service Tag'])}}
    </div>
  <div class="form-group">
      {{form::label('user_id','User ID')}}
      {{form::number('user_id',$ticket->user_id,['class'=>'form-control','placeholder' =>'User ID'])}}
  </div>
  <div class="form-group">
      {{form::label('note','Note')}}
      {{form::textarea('note',$ticket->user_id,['id'=> 'article-ckeditor','class'=>'form-control','placeholder'=>'Ditails'])}}
  </div>
  {{form::hidden('_method','PUT')}}
  {{form::submit('submit', ['class'=> ' btn btn-prymary'])}}

  {{ Form::close() }}
@endsection
