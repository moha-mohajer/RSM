@extends('layouts.app')

@section('content')
<br>
  <h1>Edit a Item</h1>
  {{ Form::open(['action' => ['itemController@update', $item->id], 'method' =>'POST']) }}
  <div class="form-group">
      {{form::label('order_id','Order')}}
      {{form::text('order_id',$item->order_id,['class'=>'form-control','placeholder'=>'Order ID'])}}
    </div>

  <div class="form-group">
    {{form::label('serial_number','Serial number')}}
    {{form::text('serial_number',$item->serial_number,['class'=>'form-control','placeholder'=>'Serial Number'])}}
  </div>

  <div class="form-group">
    {{form::label('supplier_id','Suplier')}}
    {{form::text('supplier_id',$item->supplier_id,['class'=>'form-control','placeholder'=>'Suplier Id'])}}
  </div>

  <div class="form-group">
    {{form::label('internet_link','Internet link')}}
    {{form::text('internet_link',$item->internet_link,['class'=>'form-control','placeholder'=>'Internet link '])}}
  </div>

  <div class="form-group">
    {{form::label('customer_price','Retail Pricetal')}}
    {{form::number('customer_price',$item->customer_price,['class'=>'form-control','placeholder' =>'0.00$'])}}
  </div>
  
  <div class="form-group">
    {{form::label('vat','VAT Pricetal')}}
    {{form::number('vat',$item->vat,['class'=>'form-control','placeholder' =>'0.00$'])}}
  </div>

  <div class="form-group">     
      <p>@if($item->customer_confirmation != NULL)
        {{form::label('customer_confirmation','Confrmed date')}}
        {{form::text('customer_confirmation',$item->customer_confirmation,['class'=>'form-control','placeholder' =>'0.00$'])}}
      @else
        {{form::label('Confrmed','Confrmed')}}    {{form::checkbox('customer_confirmation', now(), false)}} &nbsp
      @endif</p>
     
      <p>@if($item->cancled != NULL)
        {{form::label('cancled','Cancled date')}}
        {{form::text('cancled',$item->cancled,['class'=>'form-control','placeholder' =>'0.00$'])}}
      @else
        {{form::label('Cancled','Cancled')}}    {{form::checkbox('cancled', now(), false)}} &nbsp
      @endif</p>    
      
      <p>@if($item->ordered != NULL)
        {{form::label('ordered','Ordered date')}}
        {{form::text('ordered',$item->ordered,['class'=>'form-control','placeholder' =>'0.00$'])}}
      @else
        {{form::label('Ordered','Ordered')}}    {{form::checkbox('ordered', now(), false)}} &nbsp
      @endif</p>     
      
      <p>@if($item->arrived != NULL)
        {{form::label('arrived','Arrived date')}}
        {{form::text('arrived',$item->arrived,['class'=>'form-control','placeholder' =>'0.00$'])}}
      @else
        {{form::label('Arrived','Arrived')}}    {{form::checkbox('arrived', now(), false)}}  &nbsp
      @endif</p>  

      <p>@if($item->sold != NULL)
        {{form::label('sold','Solddate')}}
        {{form::text('sold',$item->sold,['class'=>'form-control','placeholder' =>'0.00$'])}}
      @else
        {{form::label('Sold','Sold')}}    {{form::checkbox('sold', now(), false)}}
      @endif</p>
     
      <p>@if($item->stored != NULL)
        {{form::label('stored','Stored date')}}
        {{form::text('stored',$item->stored,['class'=>'form-control','placeholder' =>'0.00$'])}}
      @else
        {{form::label('Stors','Stored')}}    {{form::checkbox('stored', now(), false)}}
      @endif</p>
  </div>

  <div class="form-group">
      {{form::label('user_id','User ID')}}
      {{form::number('user_id',$item->user_id,['class'=>'form-control','placeholder' =>'User ID'])}}
  </div>

  <div class="form-group">
      {{form::label('note','Note')}}
      {{form::textarea('note',$item->note,['id'=> 'article-ckeditor','class'=>'form-control','placeholder'=>'Ditails'])}}
  </div>
  
  {{form::hidden('_method','PUT')}}
  {{form::submit('submit', ['class'=> ' btn btn-prymary'])}}

  {{ Form::close() }}
@endsection