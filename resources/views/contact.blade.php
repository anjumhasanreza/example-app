@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <!-- Contact Form -->
    <section class="contact py-5">
        <div class="container text-center">
            <h2>Contact Me</h2>

            <!-- Success Message -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Contact Form -->
            <form action="{{ route('contact.store') }}" method="POST" class="mt-4">
                @csrf

                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <textarea name="message" class="form-control" rows="4" placeholder="Your Message" required></textarea>
                    @error('message')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </section>
@endsection
