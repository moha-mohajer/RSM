@extends('layouts.app')

@section('content')
<br>
  <h1>Edit a Service<</h1>
  {{ Form::open(['action' => ['serviceController@update', $service->id], 'method' =>'POST']) }}
  <div class="form-group">
      {{form::label('user_id','User')}}
      {{form::text('user_id',$service->user_id,['class'=>'form-control','placeholder'=>'User ID'])}}
    </div>
    <div class="form-group">
        {{form::label('ticket_id','Ticket')}}
        {{form::text('ticket_id',$service->ticket_id,['class'=>'form-control','placeholder'=>'Ticket ID'])}}
    </div>
    <div class="form-group">
        {{form::label('first_recognition','First recognition')}}
        {{form::text('first_recognition',$service->first_recognition,['class'=>'form-control','placeholder'=>'First recognition Description'])}}
    </div>
    <div class="form-group">
        {{form::label('final_solution','Final solation')}}
        {{form::text('final_solution',$service->final_solution,['class'=>'form-control','placeholder'=>'Final solation'])}}
    </div>
    <div class="form-group">
        {{form::label('security_code','Security Code')}}
        {{form::text('security_code',$service->security_code,['class'=>'form-control','placeholder'=>'Security Code'])}}
    </div>
    <div class="form-group">
        {{form::label('order_id','Order')}}
        {{form::number('order_id',$service->order_id,['class'=>'form-control','Order ID'=>'Order Id'])}}
    </div>
    <div class="form-group">
        {{form::label('start_at','Start at')}}
        {{form::date('start_at',$service->start_at,['class'=>'form-control','placeholder'=>'Starting date'])}}
    </div> 
    <div class="form-group">
        {{form::label('finish_at','Estimate finishing date')}}
        {{form::date('finish_at',$service->finish_at,['class'=>'form-control','placeholder' =>'Estimate finishing date'])}}
    </div>
    <div class="form-group">
        {{form::label('expecting_finish_at','Finishing date')}}
        {{form::date('expecting_finish_at',$service->expecting_finish_at,['class'=>'form-control','placeholder' =>'Finishing date'])}}
    </div>
    <div class="form-group">
            {{form::label('fee','price')}}
            {{form::number('fee',$service->fee,['class'=>'form-control','Order ID'=>'Job Price'])}}
        </div>
    <div class="form-group">
        {{form::label('note','Note')}}
        {{form::textarea('note',$service->note,['id'=> 'article-ckeditor','class'=>'form-control','placeholder'=>'Ditails'])}}
    </div>
  {{form::hidden('_method','PUT')}}
  {{form::submit('submit', ['class'=> ' btn btn-prymary'])}}

  {{ Form::close() }}
@endsection