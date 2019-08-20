@extends('layouts.app')

@section('content')
  <br><p><a href="/item" class="btn btn-defult">Go Back</a></p>
  <h1>create on {{$item->created_at}}</h1>
  <div>
    {{-- Cusomer ID: {!!$item->obid!!} --}}
   <a href="/user/{{$item->obid}}">Cusomer ID: {!!$item->obid!!}</a>
  <div>
    {{-- Item ID: {!!$item->supid!!} --}}
    <a href="/item/{{$item->supid}}">Item ID: {!!$item->supid!!}</a>
  </div>
  <div>
    SN: {!!$item->sn!!}</a>
  </div>
  <div>
    Retail Price {!!$item->cpr!!}
  </div>
  <div>
    VAT: {!!$item->vat!!}
  </div>
  <div>
    Total: {!!$item->vat + $item->cpr !!} 
  </div>
  <div>
      Customer Confrmation On: {!!$item->cc!!}
  </div>
  <div>
      Customer cancle On: {!!$item->cancled!!}
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