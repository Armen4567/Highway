@extends('loyouts.app')
@section('content')

    <div class="page-heading">
        <div class="container">
            <div class="heading-content">
                <h1>Single <em>Post</em></h1>
            </div>
        </div>
    </div>
    <div class="blog-entries">
        <div class="container">
            <div class="col-md-9">
                <div class="blog-posts">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="single-blog-post">
                                <img src="{{$post -> image}}" alt="">
                                <div class="text-content">
                                    <h2>{{$post -> title}}</h2>
                                    <span><a href="#">Admin</a> / <a href="#">16 September 2018</a> / <a href="#">Branding</a></span>
                                    <p>{{$post -> body}} </p>
                                        <br><br><a href="blog.php">Back to Blog</a></p>
                                    <div class="tags-share">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul class="tags">
                                                    <li>Tags:</li>
                                                    <li><a href="#">life</a>,</li>
                                                    <li><a href="#">nature</a>,</li>
                                                    <li><a href="#">life is good</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <ul class="share">
                                                    <li>Share:</li>
                                                    <li><a href="#">facebook</a>,</li>
                                                    <li><a href="#">twitter</a>,</li>
                                                    <li><a href="#">behance</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('inc.side')
        </div>
    </div>
    @endsection
