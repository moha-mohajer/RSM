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

  <?php
               $device_photosA= array();
        if($device->device_photos != 'noimage.jpg'){
            $device_photosA = explode(', ',$device->device_photos);
        }else{
            $device_photosA = ['noimage.jpg'];
        }
        ?>
              @foreach ($device_photosA as $device_photo)
                <img style="width:100%" src = "/storage/device_photos/{{$device_photo}}">
              @endforeach
              </div>


  
  <a href="/device/{{$device->id}}/edit" class="btn btn-defult">Edit</a>

  {!!Form::open(['action'=>['deviceController@destroy', $device->id],'method'=>'POST', 'class' =>"pull-right"])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
  {!!Form::close()!!}
@endsection