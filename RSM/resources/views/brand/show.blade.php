@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-30">
      <div class="card">
        
        <div class="card-header">
          <div class="form-group row">
            <div class="col">
              <h5>{{$brand->brand}}</h1>
            </div>

            <div class="col-auto">
              <a href="/brand" class="btn btn-secondary float-right">Go Back</a>
            </div>
          </div>
        </div>

        <div class="card-body">
          <div class="form-group row">
            <div class="col">

              <div class="form-group row">
                <div class="col">
                  Brand name:  
                </div>
                <div class="col-auto">
                  {{$brand->brand}}             
                </div>
              </div>

              <div>
                <small>Create By {{$brand->user_id}} at {{$brand->created_at}}</small>
              </div>
            </div>

            <div class= "col-md-4 col-sm-4 ">
              <div style="text-align: right">
                <img style="width:100% " src = "/storage/brand_logo/{{$brand->brand_logo}}"></p>
              </div>
            </div>

          </div>
        </div>

      </div> 

      <div class="form-group row">
        <div class="col">
          <a href="/brand/{{$brand->id}}/edit" class="btn btn-secondary">Edit</a>
        </div>

        <div class="col-auto">
          {!!Form::open(['action'=>['brandController@destroy', $brand->id],'method'=>'POST', 'class' =>"pull-right"])!!}
          {{Form::hidden('_method', 'DELETE')}}
          {{Form::submit('Delete', ['class'=>'btn btn-danger float-right'])}}
          {!!Form::close()!!}
        </div>
      </div>
          
    </div>
  </div>
</div>
@endsection
