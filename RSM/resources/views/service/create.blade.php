@extends('layouts.app')

@section('content')
<br>
  <h1>Add a New Service</h1>
  {{ Form::open(['action' => 'serviceController@store', 'method' =>'POST']) }}
    <div class="form-group">
      {{form::label('uid','User')}}
      {{form::text('uid','',['class'=>'form-control','placeholder'=>'User ID'])}}
    </div>
    <div class="form-group">
        {{form::label('tid','Ticket')}}
        {{form::text('tid','',['class'=>'form-control','placeholder'=>'Ticket ID'])}}
    </div>
    <div class="form-group">
        {{form::label('fr','First recognition')}}
        {{form::text('fr','',['class'=>'form-control','placeholder'=>'First recognition Description'])}}
    </div>
    <div class="form-group">
        {{form::label('fs','Final solation')}}
        {{form::text('fs','',['class'=>'form-control','placeholder'=>'Final solation'])}}
    </div>
    <div class="form-group">
        {{form::label('orderID','Order')}}
        {{form::number('orderID','',['class'=>'form-control','Order ID'=>'Order Id'])}}
    </div>
    <div class="form-group">
        {{form::label('sdate','Start at')}}
        {{form::date('sdate','',['class'=>'form-control','placeholder'=>'Starting date'])}}
    </div>
    <div class="form-group">
        {{form::label('edate','Estimate finishing date')}}
        {{form::date('edate','',['class'=>'form-control','placeholder' =>'Estimate finishing date'])}}
    </div>
    <div class="form-group">
        {{form::label('fdate','Finishing date')}}
        {{form::date('fdate','',['class'=>'form-control','placeholder' =>'Finishing date'])}}
    </div>
    <div class="form-group">
          {{form::label('jp','price')}}
          {{form::number('jp','',['class'=>'form-control','Job Price'=>'Job price'])}}
      </div>
    <div class="form-group">
        {{form::label('note','Note')}}
        {{form::textarea('note','',['id'=> 'article-ckeditor','class'=>'form-control','placeholder'=>'Ditails'])}}
    </div>
    {{form::submit('submit', ['class'=> ' btn btn-prymary'])}}
  {{ Form::close() }}
@endsection
