@extends('layouts.app')

@section('content')
  <br><p><a href="/ticket" class="btn btn-defult">Go Back</a></p>
  <h1>create on {{$ticket->created_at}}</h1>
  <div>
      {{-- Customer: {!!$ticket->customer_id!!} --}}
      <a href="/user/{{$ticket->customer_id}}">Cusomer ID: {!!$ticket->customer_id!!}</a>
  <div>
      {{-- Customer Confrmation On: {!!$ticket->customer_confirmation!!} --}}
      <a href="/device/{{$ticket->device_id}}">Device ID: {!!$ticket->device_id!!}</a>
  </div>
  <div>
     Isuse Description ID: {!!$ticket->customer_id!!}
    <div>
      Security Type: {!!$ticket->security_type!!}
    </div>
    <div>
      Security code: {!!$ticket->security_code!!}
    </div>
    <div>
      Belonging: {!!$ticket->Belonging!!}
    </div>
    <div>
        Service Tag: {!!$ticket->ticket_tag!!}
      </div>
  <div>
      User ID: {!!$ticket->user_id!!}
  </div>
  <div>
    Note: {!!$ticket->note!!}
  </div>
  <hr>
  <small>Updated at {{$ticket->updated_at}}</small>
  <hr>
  <a href="/ticket/{{$ticket->id}}/edit" class="btn btn-defult">Edit</a>

  {!!Form::open(['action'=>['ticketController@destroy', $ticket->id],'method'=>'POST', 'class' =>"pull-right"])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
  {!!Form::close()!!}
@endsection