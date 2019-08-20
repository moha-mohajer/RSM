@extends('layouts.app')

@section('content')
<br>
  <h1>Edit a Service<</h1>
  {{ Form::open(['action' => ['serviceController@update', $service->id], 'method' =>'POST']) }}
  <div class="form-group">
      {{form::label('uid','User')}}
      {{form::text('uid',$service->uid,['class'=>'form-control','placeholder'=>'User ID'])}}
    </div>
    <div class="form-group">
        {{form::label('tid','Ticket')}}
        {{form::text('tid',$service->tid,['class'=>'form-control','placeholder'=>'Ticket ID'])}}
    </div>
    <div class="form-group">
        {{form::label('fr','First recognition')}}
        {{form::text('fr',$service->fr,['class'=>'form-control','placeholder'=>'First recognition Description'])}}
    </div>
    <div class="form-group">
        {{form::label('fs','Final solation')}}
        {{form::text('fs',$service->fs,['class'=>'form-control','placeholder'=>'Final solation'])}}
    </div>
    <div class="form-group">
        {{form::label('sc','Security Code')}}
        {{form::text('sc',$service->sc,['class'=>'form-control','placeholder'=>'Security Code'])}}
    </div>
    <div class="form-group">
        {{form::label('orderID','Order')}}
        {{form::number('orderID',$service->orderID,['class'=>'form-control','Order ID'=>'Order Id'])}}
    </div>
    <div class="form-group">
        {{form::label('sdate','Start at')}}
        {{form::date('sdate',$service->sdate,['class'=>'form-control','placeholder'=>'Starting date'])}}
    </div> 
    <div class="form-group">
        {{form::label('fdate','Estimate finishing date')}}
        {{form::date('fdate',$service->fdate,['class'=>'form-control','placeholder' =>'Estimate finishing date'])}}
    </div>
    <div class="form-group">
        {{form::label('edate','Finishing date')}}
        {{form::date('edate',$service->edate,['class'=>'form-control','placeholder' =>'Finishing date'])}}
    </div>
    <div class="form-group">
            {{form::label('jp','price')}}
            {{form::number('jp',$service->jp,['class'=>'form-control','Order ID'=>'Job Price'])}}
        </div>
    <div class="form-group">
        {{form::label('note','Note')}}
        {{form::textarea('note',$service->note,['id'=> 'article-ckeditor','class'=>'form-control','placeholder'=>'Ditails'])}}
    </div>
  {{form::hidden('_method','PUT')}}
  {{form::submit('submit', ['class'=> ' btn btn-prymary'])}}

  {{ Form::close() }}
@endsection