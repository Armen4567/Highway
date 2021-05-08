@extends('loyouts.app')
@section('content')
    <div class="single-post">
        <h1>{{ $post['title'] }}</h1>
{{--        <img src="{{url('storage/'.$post['img'])}}" alt=" " width="300">--}--}}
    </div>
    @endsection

