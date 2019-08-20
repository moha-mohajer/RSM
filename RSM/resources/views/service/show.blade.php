@extends('layouts.app')

@section('content')
  <br><p><a href="/service" class="btn btn-defult">Go Back</a></p>
  <h1>create on {{$service->created_at}}</h1>
  <div>
    Service ID: {!!$service->id!!}
  <div>
      <a href="/user/{{$service->uid}}">User ID: {!!$service->uid!!}</a>
  </div>
  <div>
      <a href="/ticket/{{$service->tid}}">Ticket ID: {!!$service->tid!!}</a>
  </div>
  <div>
    Start at: {!!$service->sdate!!}
  </div>
  <div>
    First recognition: {!!$service->fr!!}
  </div>
  <div>
    Expecting to finish at: {!!$service->edate!!}
  </div>
  <div>
    Order: {!!$service->orderId!!}
    <a href="/user/{{$service->orderId}}">Order ID: {!!$service->orderID!!}</a>
  </div>
  <div>
    Final solation: {!!$service->fs!!}
  </div>
  <div>
    Finished at: {!!$service->fdate!!}
  </div>
  <div>
    Job Price: {!!$service->jp!!}
  </div>
  <div>
    Note: {!!$service->note!!}
  </div>
  <hr>
  <small>Updated at {{$service->updated_at}}</small>
  <hr>
  <a href="/service/{{$service->id}}/edit" class="btn btn-defult">Edit</a>

  {!!Form::open(['action'=>['serviceController@destroy', $service->id],'method'=>'POST', 'class' =>"pull-right"])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
  {!!Form::close()!!}
@endsection