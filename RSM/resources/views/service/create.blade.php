@extends('layouts.app')

@section('content')
<br>
  <h1>Add a New Service</h1>
  {{ Form::open(['action' => 'serviceController@store', 'method' =>'POST']) }}
    <div class="form-group">
      {{form::label('user_id','User')}}
      {{form::text('user_id','',['class'=>'form-control','placeholder'=>'User ID'])}}
    </div>
    <div class="form-group">
        {{form::label('ticket_id','Ticket')}}
        {{form::text('ticket_id','',['class'=>'form-control','placeholder'=>'Ticket ID'])}}
    </div>
    <div class="form-group">
        {{form::label('first_recognition','First recognition')}}
        {{form::text('first_recognition','',['class'=>'form-control','placeholder'=>'First recognition Description'])}}
    </div>
    <div class="form-group">
        {{form::label('final_solution','Final solation')}}
        {{form::text('final_solution','',['class'=>'form-control','placeholder'=>'Final solation'])}}
    </div>
    <div class="form-group">
        {{form::label('order_id','Order')}}
        {{form::number('order_id','',['class'=>'form-control','Order ID'=>'Order Id'])}}
    </div>
    <div class="form-group">
        {{form::label('start_at','Start at')}}
        {{form::date('start_at','',['class'=>'form-control','placeholder'=>'Starting date'])}}
    </div>
    <div class="form-group">
        {{form::label('expecting_finish_at','Estimate finishing date')}}
        {{form::date('expecting_finish_at','',['class'=>'form-control','placeholder' =>'Estimate finishing date'])}}
    </div>
    <div class="form-group">
        {{form::label('finish_at','Finishing date')}}
        {{form::date('finish_at','',['class'=>'form-control','placeholder' =>'Finishing date'])}}
    </div>
    <div class="form-group">
          {{form::label('fee','price')}}
          {{form::number('fee','',['class'=>'form-control','Job Price'=>'Job price'])}}
      </div>
    <div class="form-group">
        {{form::label('note','Note')}}
        {{form::textarea('note','',['id'=> 'article-ckeditor','class'=>'form-control','placeholder'=>'Ditails'])}}
    </div>
    {{form::submit('submit', ['class'=> ' btn btn-prymary'])}}
  {{ Form::close() }}
@endsection
