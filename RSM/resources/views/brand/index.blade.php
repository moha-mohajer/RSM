@extends('layouts.app')
<br>
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-30">
      @if (count($brands) > 0)
      <div class="card">
        <div class="card-header">{{ __('Brands') }}</div>
        
        @foreach ($brands as $brand)
        <a href="/brand/{{$brand->id}}">
          <div class="card">
            <div class="form-group row">
              <div class= "col-md-2 col-sm-2">
                <img style="width:100%" src = "/storage/brand_logo/{{$brand->brand_logo}}">
              </div>

              <div class="col-md-8 col-sm-8">
                <h3>{{$brand->brand}}</h3>
                <small>create on {{$brand->created_at}}</small>
              </div>
            </div>
          </div>
        </a>
        @endforeach
        {{$brands->links()}}
      </div>
      @else
      <p>No brand found</p>
      @endif
    </div>
  </div>
</div>
@endsection
