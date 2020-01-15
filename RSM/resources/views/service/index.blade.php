@extends('layouts.app')
<br>
@section('content')
  <h1>Service</h1>
  @if (count($services) > 0)
    @foreach ($services as $service)
        <div class="well">
            <p>
              <h3><a href="/service/{{$service->id}}">create on {{$service->created_at}}</a></h3>
              <small>{{$service->id}}</small>
            </p><br>
        </div>
    @endforeach
     {{$services->links()}}
  @else
  <p>No service found</p>    
  @endif
@endsection