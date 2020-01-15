@extends('layouts.app')
<br>
@section('content')
  <h1>Items</h1>
  @if (count($items) > 0)
    @foreach ($items as $item)
        <div class="well">
            <p>
              <h3><a href="/item/{{$item->id}}">create on {{$item->created_at}}</a></h3>
              <small>{{$item->id}}</small>
            </p><br>
        </div>
    @endforeach
     {{$items->links()}}
  @else
  <p>No item found</p>    
  @endif
@endsection