@extends('layouts.app')

@section('content')
<br>
  <h1>Edit a Device</h1>
  {{ Form::open(['action' => ['deviceController@update', $device->id], 'method' =>'POST']) }}
    <div class="form-group">
      {{form::label('type','Type')}}
      {{form::text('type',$device->type,['class'=>'form-control','placeholder'=>'Device type'])}}
  </div>
  <div class="form-group">
    {{form::label('brand','Brand')}}
    {{form::text('brand',$device->brand,['class'=>'form-control','placeholder'=>'Device Brand'])}}

  </div>
  <div class="form-group">
    {{form::label('model','Model')}}
    {{form::text('model',$device->model,['class'=>'form-control','placeholder'=>'Device Model or Model Number'])}}
  </div>
  <div class="form-group">
    {{form::label('sn','Serial number')}}
    {{form::text('sn',$device->sn,['class'=>'form-control','placeholder'=>'Serial Number'])}}
  </div>
  <div class="form-group">
    {{form::label('uid','User ID')}}
    {{form::text('uid',$device->uid,['class'=>'form-control','placeholder' =>'User ID'])}}
  </div>
  <div class="form-group">
      {{form::label('note','Note')}}
      {{form::textarea('note',$device->note,['id'=> 'article-ckeditor','class'=>'form-control','placeholder'=>'Ditails'])}}
  </div>
  {{form::hidden('_method','PUT')}}
  {{form::submit('submit', ['class'=> ' btn btn-prymary'])}}

  {{ Form::close() }}
@endsection