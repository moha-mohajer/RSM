@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Edit The User') }}</div>
        
        <div class="card-body">
        { Form::open(['action' => 'userController@update', 'method' =>'POST']) }}
        @csrf

          
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
