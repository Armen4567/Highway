@extends('loyouts.app');
@section('content')
    <div class="content">
        <div class="title m-b-md">
            Aist Blog
        </div>
        <div class="links">
            @for($i= 0 ;$i<count($pages); $i++)
                <a href="/{{$pages[$i]}}">{{$pages[$i]}}</a>
            @endfor ;
        </div>
    </div>
@endsection ;
