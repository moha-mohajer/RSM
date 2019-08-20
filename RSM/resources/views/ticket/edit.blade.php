@extends('layouts.app')

@section('content')
<br>
  <h1>Edit a Ticket</h1>
  {{ Form::open(['action' => ['ticketController@update', $ticket->id], 'method' =>'POST']) }}
  <div class="form-group">
      {{form::label('cid','Customer')}}
      {{form::text('cid',$ticket->cid,['class'=>'form-control','placeholder'=>'Customer ID'])}}
    </div>
    <div class="form-group">
        {{form::label('did','Device')}}
        {{form::text('did',$ticket->did,['class'=>'form-control','placeholder'=>'Device ID'])}}
    </div>
    <div class="form-group">
        {{form::label('description','Description')}}
        {{form::text('description',$ticket->description,['class'=>'form-control','placeholder'=>'Isuses Description'])}}
    </div>
    <div class="form-group">
        {{form::label('sop','Security Type')}}
        {{form::text('sop',$ticket->sop,['class'=>'form-control','placeholder'=>'Password, Pincode, Pattern'])}}
    </div>
    <div class="form-group">
        {{form::label('sc','Security Code')}}
        {{form::text('sc',$ticket->sc,['class'=>'form-control','placeholder'=>'Security Code'])}}
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
      {{form::label('uid','User ID')}}
      {{form::number('uid',$ticket->uid,['class'=>'form-control','placeholder' =>'User ID'])}}
  </div>
  <div class="form-group">
      {{form::label('note','Note')}}
      {{form::textarea('note',$ticket->uid,['id'=> 'article-ckeditor','class'=>'form-control','placeholder'=>'Ditails'])}}
  </div>
  {{form::hidden('_method','PUT')}}
  {{form::submit('submit', ['class'=> ' btn btn-prymary'])}}

  {{ Form::close() }}
@endsection