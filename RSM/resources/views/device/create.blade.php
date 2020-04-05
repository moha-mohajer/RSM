@extends('layouts.app')

@section('content')
<br>
<h1>Add a New Device</h1>
{{ Form::open(['action' => 'deviceController@store', 'method' =>'POST', 'enctype' => 'multipart/form-data']) }}
<div class="form-group">
  {{form::label('type','Type')}}
  {{form::text('type','',['class'=>'form-control','placeholder'=>'Device type'])}}
</div>

<div class="form-group">
  {{form::label('brand','Brand')}}
  @if (count($brands) > 0)
  <select name="brand" class="form-control">
    <option value=""> -- Select One --</option>
    @foreach ($brands as $brand)
    <option value="{{ $brand->id }}">{{ $brand->brand }}</option>
    @endforeach
  </select>
  @else
  <p>No brand found,
    <a href="/brand/create" arget="_blank">Create a brand</a>
  </p>
  @endif
</div>

<div class="form-group">
  {{form::label('model','Model')}}
  {{form::text('model','',['class'=>'form-control','placeholder'=>'Device Model or Model Number'])}}
</div>

<div class="form-group">
  {{form::label('serial_number','Serial number')}}
  {{form::text('serial_number','',['class'=>'form-control','placeholder'=>'Serial Number'])}}
</div>

<div class="form-group">
  {{form::label('device_photosA','Device Photo')}}
  <input required type="file" class="form-control" name="device_photosA[]" placeholder="address" multiple>
</div>

<div class="form-group">
  {{form::label('user_id','User ID')}}
  {{form::text('user_id','',['class'=>'form-control','placeholder' =>'User ID'])}}
</div>

<div class="form-group">
  {{form::label('note','Note')}}
  {{form::textarea('note','',['id'=> 'article-ckeditor','class'=>'form-control','placeholder'=>'Ditails'])}}
</div>
{{form::submit('submit', ['class'=> ' btn btn-prymary'])}}

{{ Form::close() }}
@endsection
