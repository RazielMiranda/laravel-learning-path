@extends('layout')

@section('title','Profile')

@section('header')
	
	@parent
	não é mais o header common
@endsection
@section('content')

Lorem ipsum dolor sit amet,  id est laborum.
<ul>
@foreach($data as $item)

<li>{{$item['title']}}<p>{{$item['body']}}</p></li>

@endforeach
</ul>
@endsection

