@extends('layouts.app')
<br>
@section('content')
  <h1>Invoices</h1>
  @if (count($invoices) > 0)
    @foreach ($invoices as $invoice)
        <div class="well">
            <p>
              <h3><a href="/invoice/{{$invoice->id}}">create on {{$invoice->created_at}}</a></h3>
              <small>{{$invoice->id}}</small>
            </p><br>
        </div>
    @endforeach
     {{$invoices->links()}}
  @else
  <p>No posts found</p>    
  @endif
@endsection