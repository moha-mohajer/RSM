@extends('layouts.app')

@section('content')
  <br><p><a href="/service" class="btn btn-defult">Go Back</a></p>
  <h1>create on {{$service->created_at}}</h1>
  <div>
    Service ID: {!!$service->id!!}
  <div>
      <a href="/user/{{$service->user_id}}">User ID: {!!$service->user_id!!}</a>
  </div>
  <div>
      <a href="/ticket/{{$service->ticket_id}}">Ticket ID: {!!$service->ticket_id!!}</a>
  </div>
  <div>
    Start at: {!!$service->start_at!!}
  </div>
  <div>
    First recognition: {!!$service->first_recognition!!}
  </div>
  <div>
    Expecting to finish at: {!!$service->expecting_finish_at!!}
  </div>
  <div>
    Order: {!!$service->orderId!!}
    <a href="/user/{{$service->orderId}}">Order ID: {!!$service->order_id!!}</a>
  </div>
  <div>
    Final solation: {!!$service->final_solution!!}
  </div>
  <div>
    Finished at: {!!$service->finish_at!!}
  </div>
  <div>
    Job Price: {!!$service->fee!!}
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