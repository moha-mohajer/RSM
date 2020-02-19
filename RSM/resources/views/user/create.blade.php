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
              {{form::select('status',
                array(
                'Deactive' => 'Deactive',
                'Active' => 'Active',
                'Truble guy' => 'Truble guy'
                ),
              ['class'=>'form-control'])}}
            </div>
          </div>

          <div class="form-group row">
            {{form::label('access_level','Access level',['class'=>'col-md-4 col-form-label text-md-right'])}}
            <div class="col-md-6">
              {{form::select('Access level',
                array(
                'ce' => 'Create,Edit,Read' ,
                'c' => 'Create' ,
                'cer' => 'Create,Edit,Read' ,
                'cr' => 'Create,Read' ,
                'r' => 'Read' ,
                'cdr' => 'Create,Delete,Read' ,
                'dr' => 'Delete,Read' ,
                'd' => 'Delete' ,
                'edr' => 'Edit,Delete,Read' ,
                'er' => 'Edit,Read' ,
                'e' => 'Edit'
                ),
              ['class'=>'form-control'])}}
            </div>
          </div>

            <div class="form-group row">
              {{form::label('name','Name',['class'=>'col-md-4 col-form-label text-md-right'])}}

              <div class="col-md-6">
                 {{form::text('name','',['class'=>'form-control','placeholder'=>'First name'])}}
              </div>
            </div>

            <div class="form-group row">
              {{form::label('sur_name','Surname',['class'=>'col-md-4 col-form-label text-md-right'])}}

              <div class="col-md-6">
                {{form::text('sur_name','',['class'=>'form-control','placeholder'=>'Family name'])}}
              </div>
            </div>

            <div class="form-group row">
              {{form::label('email','E-Mail',['class'=>'col-md-4 col-form-label text-md-right'])}}

              <div class="col-md-6">
                {{form::text('email','',['class'=>'form-control','placeholder'=>'E-Mail Address'])}}
              </div>
            </div>

            <div class="form-group row">
              {{form::label('user_name','Username',['class'=>'col-md-4 col-form-label text-md-right'])}}

              <div class="col-md-6">
                {{form::text('user_name','',['class'=>'form-control','placeholder'=>'User name '])}}
              </div>
            </div>

            <div class="form-group row">
              {{form::label('password','Password',['class'=>'col-md-4 col-form-label text-md-right'])}}

              <div class="col-md-6">
                {{form::password('password',['class'=>'form-control'])}}
              </div>
            </div>

            <div class="form-group row">
              {{form::label('phone_number','Phone number',['class'=>'col-md-4 col-form-label text-md-right'])}}

              <div class="col-md-6">
                {{form::text('phone_number','',['class'=>'form-control','placeholder'=>'Phone number '])}}
              </div>
            </div>

            <div class="form-group row">
              {{form::label('language','Language',['class'=>'col-md-4 col-form-label text-md-right'])}}
              <div class="col-md-6">
                {{form::select('language',array(
                  'English' => 'English' ,
                  'Greek' => 'Greek' ,
                  'Farsi' => 'Farsi' ,
                  'French' => 'French'
                  ),
                ['class'=>'form-control','multiple' => 'multiple'])}}
              </div>
            </div>

            <div class="form-group row">
              <label for="language" class="col-md-4 col-form-label text-md-right">{{ __('language') }}</label>
              <div class="col-md-6">
                <select id="language" class="form-control @error('language') is-invalid @enderror" name="language[]" autofocus size="4" multiple>
                  <option value="English">English</option>
                  <option value="Greek">Greek</option>
                  <option value="French">French</option>
                  <option value="Farsi">Farsi/Persian</option>
                </select>
                @error('language')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="date_of_birth" class="col-md-4 col-form-label text-md-right">{{ __('Date of birth') }}</label>
              <div class="col-md-6">
                <input id="date_of_birth" type="date" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" value="{{ old('date_of_birth') }}" required autocomplete="date_of_birth" autofocus>

                @error('date_of_birth')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('address') }}</label>
              <div class="col-md-6">
                <input id="address" type="textarea" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                @error('address')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="photo" class="col-md-4 col-form-label text-md-right">{{ __('photo') }}</label>
              <div class="col-md-6">
                <input id="photo" type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" value="{{ old('photo') }}" required autocomplete="photo" autofocus>

                @error('photo')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="note" class="col-md-4 col-form-label text-md-right">{{ __('note') }}</label>
              <div class="col-md-6">
                <input id="note" type="textarea" class="form-control @error('note') is-invalid @enderror" name="note" value="{{ old('note') }}" required autocomplete="note" autofocus>

                @error('note')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="user_id" class="col-md-4 col-form-label text-md-right">{{ __('User ID') }}</label>
              <div class="col-md-6">
                <input id="user_id" type="number" class="form-control @error('user_id') is-invalid @enderror" name="user_id" value="{{ old('user_id') }}" required autocomplete="user_id" autofocus>

                @error('user_id')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
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
