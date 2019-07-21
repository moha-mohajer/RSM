@extends('layouts.app')

@section('content')
<br>
  <h1>Edit a Invoice</h1>
  {{ Form::open(['action' => ['invoiceController@update', $invoice->id], 'method' =>'POST']) }}
    <div class="form-group">
      {{form::label('cid','Customer')}}
      {{form::text('cid',$invoice->cid,['class'=>'form-control','placeholder'=>'Customet ID'])}}
  </div>
  <div class="form-group">
    {{form::label('sid','Service')}}
    {{form::text('sid',$invoice->sid,['class'=>'form-control','placeholder'=>'Service ID'])}}
  </div>
  <div class="form-group">
    {{form::label('iid','Item')}}
    {{form::text('iid',$invoice->iid,['class'=>'form-control','placeholder'=>'Item Number'])}}
  </div>
  <div class="form-group">
    {{form::label('tax','VAT')}}
    {{form::number('tax',$invoice->tax,['class'=>'form-control','placeholder'=>'0.00$'])}}
  </div>
  <div class="form-group">
    {{form::label('total','Total')}}
    {{form::number('total',$invoice->total,['class'=>'form-control','placeholder' =>'0.00$'])}}
  </div>
  <div class="form-group">
    {{form::label('dicount','Dicount')}}
    {{form::number('dicount',$invoice->dicount,['class'=>'form-control','placeholder' =>'0.00$'])}}
  </div>
  <div class="form-group">
    {{form::label('pay','Total Amount')}}
    {{form::number('pay',$invoice->pay,['class'=>'form-control','placeholder' =>'0.00$'])}}
  </div>
  <div class="form-group">
      {{form::label('note','Note')}}
      {{form::textarea('note',$invoice->note,['id'=> 'article-ckeditor','class'=>'form-control','placeholder'=>'Ditails'])}}
  </div>
  {{form::hidden('_method','PUT')}}
  {{form::submit('submit', ['class'=> ' btn btn-prymary'])}}

  {{ Form::close() }}
@endsection