
@extends('loyouts.app')
@section('content')
    <div id="video-container">
        <div class="video-overlay"></div>
        <div class="video-content">
            <div class="inner">
                <h1>Welcome to <em>Highway</em></h1>
                <p>FREE CSS TEMPLATE by templatemo</p>
                <p>Homepage with small-width image gallery</p>
                <div class="scroll-icon">
                    <a class="scrollTo" data-scrollTo="portfolio" href="#"><img src="img/scroll-icon.png" alt=""></a>
                </div>
            </div>
        </div>
        <video autoplay loop muted>
            <source src="highway-loop.mp4" type="video/mp4" />
        </video>
    </div>
    <div class="grid-portfolio" id="portfolio">
        <div class="container">
            <div class="row" style="padding-left: 225px">
                <div class="col-md-5 col-sm-5" style="display:flex;flex-wrap: wrap; justify-content: space-evenly; width: 154%;margin-left: -370px">
                    @foreach($posts as   $post)
                    <div class="portfolio-item">
                        <div class="thumb">
                            <a href="posts/{{$post->id}}" >
                                <div class="hover-effect" >
                                    <div class="hover-content">
                                        <h1>{{$post->title}}</h1>
                                        <p>{{$post->body}}</p>
                                    </div>
                                </div></a>
                            <div class="image">
                                <img src="{{$post->image}}" style="width: 400px; height: 400px">
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="load-more-button">
                        <a href="#">Load More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
