@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Hero Section -->
<!-- <section class="hero bg-dark text-white text-center py-5">
        <h1>Welcome to My Portfolio</h1>
        <p>I'm a web developer with a passion for creating beautiful and responsive websites.</p>
        <a href="{{ route('portfolio') }}" class="btn btn-light mt-3">View My Work</a>
    </section> -->


    <div id="homepageCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#homepageCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#homepageCarousel" data-slide-to="1"></li>
            <li data-target="#homepageCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Carousel Items -->
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <img src="/images/slide1.jpg" class="d-block w-100" alt="Slide 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Project 1</h5>
                    <p>A short description of Project 1.</p>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <img src="/images/slide2.jpg" class="d-block w-100" alt="Slide 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Project 2</h5>
                    <p>A brief description of Project 2.</p>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <img src="/images/slide1.jpg" class="d-block w-100" alt="Slide 3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Project 3</h5>
                    <p>An overview of Project 3.</p>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="carousel-control-prev" href="#homepageCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#homepageCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

@endsection