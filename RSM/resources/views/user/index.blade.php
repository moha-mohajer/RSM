@extends('layouts.app')
<br>
@section('content')
  <h1>Users</h1>
  @if (count($users) > 0)
    @foreach ($users as $user)
        <div class="well">
            <p>
              <h3><a href="/user/{{$user->id}}">create on {{$user->created_at}}</a></h3>
              <small>{{$user->name}}</small>
            </p><br>
        </div>
    @endforeach
     {{$users->links()}}
  @else
  <p>No user found</p>    
  @endif
@endsection