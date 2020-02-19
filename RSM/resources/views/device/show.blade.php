@extends('layouts.app')

@section('content')
  <br><p><a href="/device" class="btn btn-defult">Go Back</a></p>
  <h1>{{$device->type}}</h1>
  <div>
    {!!$device->model!!}
  </div>
  <div>
    Serial number: {!!$device->serial_number!!}
  </div>
  <div>
    UID: {!!$device->user_id!!}
  </div>
  <div>
    Note: {!!$device->note!!}
  </div>
  <hr>
  <small>Createt at {{$device->created_at}}</small>
  <hr>
  <a href="/device/{{$device->id}}/edit" class="btn btn-defult">Edit</a>

  {!!Form::open(['action'=>['deviceController@destroy', $device->id],'method'=>'POST', 'class' =>"pull-right"])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
  {!!Form::close()!!}
@endsection