@extends('layouts.app')
<br>
@section('content')
  <h1>Tickets</h1>
  @if (count($tickets) > 0)
    @foreach ($tickets as $ticket)
        <div class="well">
            <p>
              <h3><a href="/ticket/{{$ticket->id}}">create on {{$ticket->created_at}}</a></h3>
              <small>{{$ticket->id}}</small>
            </p><br>
        </div>
    @endforeach
     {{$tickets->links()}}
  @else
  <p>No ticket found</p>    
  @endif
@endsection