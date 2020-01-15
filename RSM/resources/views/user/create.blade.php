@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Register a User') }}</div>

        <div class="card-body">
        {{ Form::open(['action' => 'userController@store', 'method' =>'POST']) }}
        @csrf

          <div class="form-group row">
            {{form::label('status','Status',['class'=>'col-md-4 col-form-label text-md-right'])}}
            <div class="col-md-6">
              {{form::select('tid',
                array(
                  'Deactive' => 'Deactive',
                  'Active' => 'Active'
                ),
                ['class'=>'form-control'])}}
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
