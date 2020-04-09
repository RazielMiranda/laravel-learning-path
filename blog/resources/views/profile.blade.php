@extends('layout')

@section('title','Profile')

@section('header')
	
	@parent
	não é mais o header common
	<a href="logout">sair</a>
@endsection
@section('content')

Lorem ipsum dolor sit amet, id est laborum.
<ul>
@foreach($data as $item)

<li>{{$item['title']}}<p>{{$item['body']}}</p></li>

@endforeach
</ul>
@endsection

<h1>{{session('sessionData')['user']}}</h1>
<h1>{{session('sessionData')['password']}}</h1>
<h1>{{__('profile.welcome')}}</h1>