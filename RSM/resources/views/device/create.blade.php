@extends('layouts.app')

@section('content')
  <h1>Add a New Device</h1>
  {{ Form::open(['action' => 'deviceController@store', 'method' =>'POST']) }}
    <div class="form-group">
        {{form::label('type','Type')}}
        {{form::text('type','',['class'=>'form-control','placeholder'=>'Device type'])}}
    </div>
    <div class="form-group">
        {{form::label('brand','Brand')}}
        {{form::textarea('brand','',['id'=> 'article-ckeditor','class'=>'form-control','placeholder'=>'Brand Name'])}}
    </div>
    {{form::submit('submit', ['class'=> ' btn btn-prymary'])}}
  
  {{ Form::close() }}
@endsection