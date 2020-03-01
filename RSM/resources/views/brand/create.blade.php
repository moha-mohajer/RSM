@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-30">
      <div class="card">
        <div class="card-header">{{ __('Register a brand') }}</div>

        <div class="card-body">
          {{ Form::open(['action' => 'brandController@store', 'method' =>'POST', 'enctype' => 'multipart/form-data']) }}
          @csrf

            <div class="form-group row">
              {{form::label('brand','Brand name',['class'=>'col-md-4 col-form-label text-md-right'])}}

              <div class="col-md-6">
                 {{form::text('brand','',['class'=>'form-control','placeholder'=>'Brand name'])}}
              </div>
            </div>

            <div class="form-group row">
              {{form::label('brand_logo','Brand logo',['class'=>'col-md-4 col-form-label text-md-right'])}}

              <div class="col-md-6">
                {{form::file('brand_logo'
                ,null,['class'=>'form-control'])}}
                
              </div>
            </div>

            <div class="form-group row">
              {{form::label('note','Note',['class'=>'col-md-4 col-form-label text-md-right'])}}

              <div class="col-md-6">
                {{form::textarea('note'
                ,null,array_merge(['id'=> 'article-ckeditor','class'=>'form-control','placeholder'=>'Ditails']), )}}
                
              </div>
            </div>

            <div class="form-group row">
              {{form::label('user_id','User ID',['class'=>'col-md-4 col-form-label text-md-right'])}}

              <div class="col-md-6">
                {{form::number('user_id'
                ,null,['class'=>'form-control','placeholder'=>'User ID'])}}
                
              </div>
            </div>

            <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                {{form::submit('submit', ['class'=> ' btn btn-primary'])}}
              </div>
            </div>

            {{ Form::close() }}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
