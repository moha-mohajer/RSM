@extends('layouts.app')
<br>
@section('content')
  <h1>Items</h1>
  @if (count($items) > 0)
    @foreach ($items as $item)
        <div class="well">
            <p>
            
              <h3><a href="/item/{{$item->id}}">{{$item->id}}</a></h3>
              <small>create on {{$item->created_at}}</small>
            </p><br>
        </div>
    @endforeach
     {{$items->links()}}
  @else
  <p>No posts found</p>    
  @endif
@endsection