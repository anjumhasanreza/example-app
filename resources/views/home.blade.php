@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Hero Section -->
    <section class="hero bg-primary text-white text-center py-5">
        <h1>Welcome to My Portfolio</h1>
        <p>I'm a web developer with a passion for creating beautiful and responsive websites.</p>
        <a href="{{ route('portfolio') }}" class="btn btn-light mt-3">View My Work</a>
    </section>
@endsection
