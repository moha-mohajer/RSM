@extends('layouts.app')

@section('content')
  <br><p><a href="/item" class="btn btn-defult">Go Back</a></p>
  <h1>create on {{$item->created_at}}</h1>
  <div>
    {{-- Item ID: {!!$item->supid!!} --}}
    Item ID: {!!$item->supid!!}
  </div>
  <div>
    SN: {!!$item->sn!!}</a>
  </div>
  <div>
    VAT: {!!$item->price!!}
  </div>
  <div>
    Retail Price {!!$item->cpr!!}
  </div>
  <div>
      Customer Confrmation On: {!!$item->cc!!}
  </div>
  <div>
      Customer cancle On: {!!$item->cc!!}
  </div>
  <div>
      Ordare on: {!!$item->order!!}
  </div>
  <div>
      Item arrived at: {!!$item->arrived!!}
  </div>
  <div>
      Sold On: {!!$item->sold!!}
  </div>
  <div>
      Stored at: {!!$item->stored!!}
  </div>
  <div>
      User ID: {!!$item->uid!!}
  </div>
  <div>
    Note: {!!$item->note!!}
  </div>
  <hr>
  <small>Updated at {{$item->updated_at}}</small>
  <hr>
  <a href="/item/{{$item->id}}/edit" class="btn btn-defult">Edit</a>

  {!!Form::open(['action'=>['itemController@destroy', $item->id],'method'=>'POST', 'class' =>"pull-right"])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
  {!!Form::close()!!}
@endsection