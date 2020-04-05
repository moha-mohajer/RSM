@extends('layouts.app')
<br>
@section('content')
  <h1>Devices</h1>
  @if (count($devices) > 0)
    @foreach ($devices as $device)
      <div class="well">
        <a href="/device/{{$device->id}}">
          <div class="form-group row">
            <div class="col-md-8 col-sm-8">
              <h3>{{$device->type}}</h3>
              <small>create on {{$device->created_at}}</small>
            </div>
          </div>
        </a>
      </div>
    @endforeach
     {{$devices->links()}}
  @else
  <p>No device found</p>    
  @endif
@endsection