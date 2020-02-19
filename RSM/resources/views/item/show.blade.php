@extends('layouts.app')

@section('content')
  <br><p><a href="/item" class="btn btn-defult">Go Back</a></p>
  <h1>create on {{$item->created_at}}</h1>
  <div>
    {{-- Cusomer ID: {!!$item->order_id!!} --}}
   <a href="/user/{{$item->order_id}}">Cusomer ID: {!!$item->order_id!!}</a>
 
  <div>
    {{-- Item ID: {!!$item->supplier_id!!} --}}
    <a href="/item/{{$item->supplier_id}}">Supplier ID: {!!$item->supplier_id!!}</a>
  </div>

  <div>
    Internet_link: {!!$item->internet_link!!}</a>
  </div>

  <div>
    serialnumber: {!!$item->serial_number!!}</a>
  </div>

  <div>
    Retail Price {!!$item->customer_price!!}
  </div>

  <div>
    VAT: {!!$item->vat!!}
  </div>

  <div>
    Total: {!!$item->vat + $item->customer_price !!} 
  </div>

  <div>
      Customer Confrmation On: {!!$item->customer_confirmation!!}
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
      User ID: {!!$item->user_id!!}
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