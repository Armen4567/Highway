@extends('loyouts.app')
@section('main')
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
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <div class="thumb">
                            <a href="img/big_portfolio_item_4.jpg" data-lightbox="image-1"><div class="hover-effect">
                                <div class="hover-content">
                                    <h1>Biodiesel <em>squid</em></h1>
                                    <p>Awesome Subtittle Goes Here</p>
                                </div>
                            </div></a>
                            <div class="image">
                                <img src="img/portfolio_item_4.jpg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <div class="thumb">
                            <a href="img/big_portfolio_item_2.jpg" data-lightbox="image-1"><div class="hover-effect">
                                <div class="hover-content">
                                    <h1>raclette <em>taxidermy</em></h1>
                                    <p>Awesome Subtittle Goes Here</p>
                                </div>
                            </div></a>
                            <div class="image">
                                <img src="img/portfolio_item_2.jpg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <div class="thumb">
                            <a href="img/big_portfolio_item_3.jpg" data-lightbox="image-1"><div class="hover-effect">
                                <div class="hover-content">
                                    <h1>humblebrag <em>brunch</em></h1>
                                    <p>Awesome Subtittle Goes Here</p>
                                </div>
                            </div></a>
                            <div class="image">
                                <img src="img/portfolio_item_3.jpg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <div class="thumb">
                            <a href="img/big_portfolio_item_1.jpg" data-lightbox="image-1"><div class="hover-effect">
                                <div class="hover-content">
                                    <h1>Succulents <em>chambray</em></h1>
                                    <p>Awesome Subtittle Goes Here</p>
                                </div>
                            </div></a>
                            <div class="image">
                                <img src="img/portfolio_item_1.jpg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <div class="thumb">
                            <a href="img/big_portfolio_item_5.jpg" data-lightbox="image-1"><div class="hover-effect">
                                <div class="hover-content">
                                    <h1>freegan <em>aesthetic</em></h1>
                                    <p>Awesome Subtittle Goes Here</p>
                                </div>
                            </div></a>
                            <div class="image">
                                <img src="img/portfolio_item_5.jpg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <div class="thumb">
                            <a href="img/big_portfolio_item_6.jpg" data-lightbox="image-1"><div class="hover-effect">
                                <div class="hover-content">
                                    <h1>taiyaki <em>vegan</em></h1>
                                    <p>Awesome Subtittle Goes Here</p>
                                </div>
                            </div></a>
                            <div class="image">
                                <img src="img/portfolio_item_6.jpg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <div class="thumb">
                            <a href="img/big_portfolio_item_7.jpg" data-lightbox="image-1"><div class="hover-effect">
                                <div class="hover-content">
                                    <h1>Thundercats <em>santo</em></h1>
                                    <p>Awesome Subtittle Goes Here</p>
                                </div>
                            </div></a>
                            <div class="image">
                                <img src="img/portfolio_item_7.jpg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <div class="thumb">
                            <a href="img/big_portfolio_item_8.jpg" data-lightbox="image-1"><div class="hover-effect">
                                <div class="hover-content">
                                    <h1>wayfarers <em>yuccie</em></h1>
                                    <p>Awesome Subtittle Goes Here</p>
                                </div>
                            </div></a>
                            <div class="image">
                                <img src="img/portfolio_item_8.jpg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="portfolio-item">
                        <div class="thumb">
                            <a href="img/big_portfolio_item_9.jpg" data-lightbox="image-1"><div class="hover-effect">
                                <div class="hover-content">
                                    <h1>disrupt <em>street</em></h1>
                                    <p>Awesome Subtittle Goes Here</p>
                                </div>
                            </div></a>
                            <div class="image">
                                <img src="img/portfolio_item_9.jpg">
                            </div>
                        </div>
                    </div>
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

