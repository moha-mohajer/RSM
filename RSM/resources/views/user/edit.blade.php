@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-30">
      <div class="card">
        
        <div class="card-header">
          <div class="form-group row">
            <div class="col">
              <h5>{{ __('Edit ') }}{{$user->name}}{{ __('  ') }}{{$user->surname}}</h1>
            </div>
          </div>

        <div class="card-body">
          {{ Form::open(['action' => ['userController@update', $user->id], 'method' =>'POST', 'enctype' => 'multipart/form-data']) }}
          @csrf

          <div class="form-group row">
            {{form::label('status','Status',['class'=>'col-md-4 col-form-label text-md-right'])}}
            <div class="col-md-6">
              {{form::select('status'
              ,array(
                'Deactive' => 'Deactive',
                'Active' => 'Active',
                'Truble guy' => 'Truble guy'
                ),null,array_merge(['class' => 'form-control']))}}
            </div>
          </div>

          <div class="form-group row">
            {{form::label('access_level','Access level'
            ,['class'=>'col-md-4 col-form-label text-md-right'])}}
            <div class="col-md-6">
              {{form::select('Access level',
                array(
                8 => 'Create,Edit,Read' ,
                9 => 'Create' ,
                10 => 'Create,Edit,Read' ,
                1 => 'Create,Read' ,
                0 => 'Read' ,
                2 => 'Create,Delete,Read' ,
                3 => 'Delete,Read' ,
                4 => 'Delete' ,
                5 => 'Edit,Delete,Read' ,
                6 => 'Edit,Read' ,
                7 => 'Edit'
              ),null,array_merge(['class' => 'form-control']))}}
            </div>
          </div>

          <div class="form-group row">
            {{form::label('name','Name',['class'=>'col-md-4 col-form-label text-md-right'])}}

            <div class="col-md-6">
                {{form::text('name',$user->name,['class'=>'form-control','placeholder'=>'First name'])}}
            </div>
          </div>

          <div class="form-group row">
            {{form::label('surname','Surname',['class'=>'col-md-4 col-form-label text-md-right'])}}

            <div class="col-md-6">
              {{form::text('surname',$user->surname,['class'=>'form-control','placeholder'=>'Family name'])}}
            </div>
          </div>

          <div class="form-group row">
              {{form::label('email','E-Mail',['class'=>'col-md-4 col-form-label text-md-right'])}}

              <div class="col-md-6">
                {{form::text('email',$user->email,['class'=>'form-control','placeholder'=>'E-Mail Address'])}}
              </div>
            </div>

            <div class="form-group row">
              {{form::label('username','Username',['class'=>'col-md-4 col-form-label text-md-right'])}}

              <div class="col-md-6">
                {{form::text('username',$user->username,['class'=>'form-control','placeholder'=>'User name '])}}
              </div>
            </div>

            <div class="form-group row">
              {{form::label('password','Password',['class'=>'col-md-4 col-form-label text-md-right'])}}

              <div class="col-md-6">
                {{form::password('password',['class'=>'form-control'])}}
              </div>
            </div>

            <div class="form-group row">
              {{form::label('language','Language',['class'=>'col-md-4 col-form-label text-md-right'])}}
              <div class="col-md-6">
                {{form::select('language[]',array(
                  'English' => 'English' ,
                  'Greek' => 'Greek' ,
                  'Farsi' => 'Farsi' ,
                  'French' => 'French'
                  ),null, array_merge(['class' => 'form-control'], array('multiple' => true)))}}
              </div>
              </div>

            <div class="form-group row">
              {{form::label('phone_number','Phone number',['class'=>'col-md-4 col-form-label text-md-right'])}}

              <div class="col-md-6">
                {{form::text('phone_number',$user->phone_number,['class'=>'form-control','placeholder'=>'Phone number '])}}
              </div>
            </div>

            <div class="form-group row">
              {{form::label('date_of_birth','Date of birth',['class'=>'col-md-4 col-form-label text-md-right'])}}

              <div class="col-md-6">
                {{form::date('date_of_birth',$user->date_of_birth,['class'=>'form-control','placeholder'=>'Birthday'])}}
                
              </div>
            </div>

            <div class="form-group row">
              {{form::label('address','Address',['class'=>'col-md-4 col-form-label text-md-right'])}}

              <div class="col-md-6">
                {{form::textarea('address'
                ,$user->address,['class'=>'form-control','placeholder'=>'Address','rows'=>'2', 'cols'=>'800'])}}
                
              </div>
            </div>

            <div class="form-group row">
              {{form::label('photo','Photo',['class'=>'col-md-4 col-form-label text-md-right'])}}

              <div class="col-md-6">
                {{form::file('photo'
                ,null,['class'=>'form-control'])}}
                
              </div>
            </div>

            <div class="form-group row">
              {{form::label('note','Note',['class'=>'col-md-4 col-form-label text-md-right'])}}

              <div class="col-md-6">
                {{form::textarea('note'
                ,$user->note,array_merge(['id'=> 'article-ckeditor','class'=>'form-control','placeholder'=>'Ditails']), )}}
                
              </div>
            </div>

          <div class="form-group row">
            {{form::label('user_id','User ID',['class'=>'col-md-4 col-form-label text-md-right'])}}

            <div class="col-md-6">
              {{form::number('user_id'
              ,$user->user_id,['class'=>'form-control','placeholder'=>'User ID'])}}

            </div>
          </div>

          <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
              {{form::hidden('_method','PUT')}}
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
