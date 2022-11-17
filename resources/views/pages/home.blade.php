@include('partials.header')
@include('partials.navbar')
<style>
    body {
        background-color: #f1f6ff;
    }

    #news-slider {
        margin-top: 5px;
    }

    .post-slide {
        background: #fff;
        margin: 20px 15px 20px;
        border-radius: 15px;
        padding-top: 1px;
        box-shadow: 0px 14px 22px -9px #bbcbd8;
    }

    .post-slide .post-img {
        position: relative;
        overflow: hidden;
        border-radius: 10px;
        margin: 0;
    }

    .post-slide .post-img img {
        width: 400px;
        height: 300px;
        object-fit: cover;
        transform: scale(1, 1);
        transition: transform 0.2s linear;
    }

    .post-slide:hover .post-img img {
        transform: scale(1.1, 1.1);
    }

    .post-slide .over-layer {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        opacity: 0;
        background: linear-gradient(-45deg,
                rgba(6, 190, 244, 0.75) 0%,
                rgba(45, 112, 253, 0.6) 100%);
        transition: all 0.5s linear;
    }

    .post-slide:hover .over-layer {
        opacity: 1;
        text-decoration: none;
    }

    .post-slide .over-layer i {
        position: relative;
        top: 45%;
        text-align: center;
        display: block;
        color: transparent;
        font-size: 25px;
    }

    .post-slide .post-content {
        background: transparent !important;
        padding: 2px 20px 40px;
        border-radius: 15px;
    }

    .post-slide .post-title a {
        font-size: 15px;
        font-weight: bold;
        color: #333;
        display: inline-block;
        text-transform: uppercase;
        transition: all 0.3s ease 0s;
    }

    .post-slide .post-title a:hover {
        text-decoration: none;
        color: #3498db;
    }

    .post-slide .post-description {
        line-height: 24px;
        color: #808080;
        margin-bottom: 25px;
    }

    .post-slide .post-date {
        color: #a9a9a9;
        font-size: 14px;
    }

    .post-slide .post-date i {
        font-size: 20px;
        margin-right: 8px;
        color: #cfdace;
    }

    .post-slide .read-more {
        padding: 7px 20px;
        float: right;
        font-size: 12px;
        background: #2196f3;
        color: #ffffff;
        box-shadow: 0px 10px 20px -10px #1376c5;
        border-radius: 25px;
        text-transform: uppercase;
    }

    .post-slide .read-more:hover {
        background: #3498db;
        text-decoration: none;
        color: #fff;
    }

    .owl-controls .owl-buttons {
        text-align: center;
        margin-top: 20px;
    }

    .owl-controls .owl-buttons .owl-prev {
        background: #fff;
        position: absolute;
        top: -13%;
        left: 15px;
        padding: 0 18px 0 15px;
        border-radius: 50px;
        box-shadow: 3px 14px 25px -10px #92b4d0;
        transition: background 0.5s ease 0s;
    }

    .owl-controls .owl-buttons .owl-next {
        background: #fff;
        position: absolute;
        top: -13%;
        right: 15px;
        padding: 0 15px 0 18px;
        border-radius: 50px;
        box-shadow: -3px 14px 25px -10px #92b4d0;
        transition: background 0.5s ease 0s;
    }

    .owl-controls .owl-buttons .owl-prev:after,
    .owl-controls .owl-buttons .owl-next:after {
        content: "\f104";
        font-family: FontAwesome;
        color: #333;
        font-size: 30px;
    }

    .owl-controls .owl-buttons .owl-next:after {
        content: "\f105";
    }

    @media only screen and (max-width: 1280px) {
        .post-slide .post-content {
            padding: 0px 15px 25px 15px;
        }
    }
</style>
<div class="container">
    <div class="row mt-1">
        <div class="header" style="height: 40vh !important;">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="position-absolute bottom-0 end-0 text-white p-3">
                            <h1>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo, fugit!</h1>
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                        <img src="https://source.unsplash.com/random/1200x500?movie" style="height: 40vh !important; object-fit:cover; border-radius:20px 20px 0 0;" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="https://source.unsplash.com/random/1200x500?movie" style="height: 40vh !important; object-fit:cover; border-radius:20px 20px 0 0;" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="https://source.unsplash.com/random/1200x500?movie" style="height: 40vh !important; object-fit:cover; border-radius:20px 20px 0 0;" class="d-block w-100">
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <h1>Sedang Populer</h1>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div id="news-slider" class="owl-carousel">
                            <?php for ($i = 0; $i < 10; $i++) {
                                echo ' 
                                <div class="post-slide">
                                <a href="#">
                                <div class="post-img">
                                    <img src="https://images.unsplash.com/photo-1596265371388-43edbaadab94?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=301&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=501" alt="">
                                    <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                                </div>
                                <div class="post-content">
                                    <h3 class="post-title">
                                        <a href="#">Lorem ipsum dolor sit amet.</a>
                                    </h3>
                                    <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                                    <a href="#" class="read-more">read more</a>
                                </div>
                                </a>
                                </div>
                                ';
                            }; ?>


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
@include('partials.footer')