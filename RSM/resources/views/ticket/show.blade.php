@extends('layouts.app')

@section('content')
  <br><p><a href="/ticket" class="btn btn-defult">Go Back</a></p>
  <h1>create on {{$ticket->created_at}}</h1>
  <div>
      {{-- Customer: {!!$ticket->cid!!} --}}
      <a href="/user/{{$ticket->cid}}">Cusomer ID: {!!$ticket->cid!!}</a>
  <div>
      {{-- Customer Confrmation On: {!!$ticket->cc!!} --}}
      <a href="/device/{{$ticket->did}}">Device ID: {!!$ticket->did!!}</a>
  </div>
  <div>
     Isuse Description ID: {!!$ticket->cid!!}
    <div>
      Security Type: {!!$ticket->sop!!}
    </div>
    <div>
      Security code: {!!$ticket->sc!!}
    </div>
    <div>
      Belonging: {!!$ticket->Belonging!!}
    </div>
    <div>
        Service Tag: {!!$ticket->st!!}
      </div>
  <div>
      User ID: {!!$ticket->uid!!}
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