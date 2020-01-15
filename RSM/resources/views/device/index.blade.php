@extends('layouts.app')
<br>
@section('content')
  <h1>Devices</h1>
  @if (count($devices) > 0)
    @foreach ($devices as $device)
        <div class="well">
            <p>
              <h3><a href="/device/{{$device->id}}">{{$device->type}}</a></h3>
              <small>create on {{$device->created_at}}</small>
            </p><br>
        </div>
    @endforeach
     {{$devices->links()}}
  @else
  <p>No device found</p>    
  @endif
@endsection