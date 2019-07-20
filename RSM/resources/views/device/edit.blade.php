@extends('layouts.app')

@section('content')
  <h1>Edit a Device</h1>
  {{ Form::open(['action' => ['deviceController@update', $device->id], 'method' =>'POST']) }}
    <div class="form-group">
        {{form::label('type','Type')}}
        {{form::text('type',$post->type,['class'=>'form-control','placeholder'=>'Device Type'])}}
    </div>
    <div class="form-group">
        {{form::label('brand','Brand')}}
        {{form::textarea('brand',$post->body,['id'=> 'article-ckeditor','class'=>'form-control','placeholder'=>'Brand Name'])}}
    </div>
    {{form::hidden('_method','PUT')}}
    {{form::submit('submit', ['class'=> ' btn btn-prymary'])}}
  {{ Form::close() }}
@endsection