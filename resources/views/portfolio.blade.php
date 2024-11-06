@extends('layouts.app')

@section('title', 'Portfolio')

@section('content')
    <!-- Portfolio Section -->
    <section class="portfolio py-5">
        <div class="container text-center">
            <h2>My Work</h2>
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('img/project1.jpg') }}" class="img-fluid" alt="Project 1">
                    <h4>Project 1</h4>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('img/project2.jpg') }}" class="img-fluid" alt="Project 2">
                    <h4>Project 2</h4>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('img/project3.jpg') }}" class="img-fluid" alt="Project 3">
                    <h4>Project 3</h4>
                </div>
            </div>
        </div>
    </section>
@endsection
