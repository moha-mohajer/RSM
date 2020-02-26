@extends('layouts.app')
<br>
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-30">
      <div class="card">
        <div class="card-header">{{ __('Users') }}</div>

        @if (count($users) > 0)
          @foreach ($users as $user)
          <a href="/User/{{$user->id}}">
            <div class="card">
                <div class="form-group row">

                  <div class= "col-md-2 col-sm-2">
                    <img style="width:100%" src = "/storage/photo/{{$user->photo}}">
                  </div>

                  <div class="col-md-8 col-sm-8">
                    <h3>{{$user->name}}{{ __('  ') }}{{$user->surname}}</h3>
                    <small>create on {{$user->created_at}}</small>
                    <small>{{$user->phone_number}}</small>
                  </div>
                </div>
              </div>
            </a>
          @endforeach
          {{$users->links()}}
        @else
          <p>No user found</p>
        @endif
      </div>
    </div>
  </div>
</div>
@endsection
