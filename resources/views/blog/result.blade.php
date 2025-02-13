@extends('layout.layout')

@section('contents')
<!-- Banner Section -->
<section class="banner" style="height:50vh;">
    <h1 class="fw-bold" style="text-align: center;color:white">Generated Blog</h1>
</section>

<!-- Blog Container -->
<div class="container mt-5 py-5">
    <div class="card shadow-lg p-4">
        <h2 class="text-primary text-center">{{ $title }}</h2>
        <hr>
        <div class="blog-content">
            {!! $content !!} {{-- Assuming content is safe and contains HTML --}}
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('blog.create') }}" class="btn btn-primary btn-lg">Generate Another</a>
        </div>
    </div>
</div>

<!-- Custom Styling -->
<style>
    .banner {
        background-size: cover;
        background-position: center;
        min-height: 150px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .card {
        border-radius: 12px;
        background: #fff;
        transition: all 0.3s ease-in-out;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
    }

    .blog-content {
        font-size: 1.1rem;
        line-height: 1.7;
        color: #333;
    }

    .btn-primary {
        border-radius: 30px;
        padding: 12px 25px;
        font-weight: bold;
        text-transform: uppercase;
    }

    .btn-primary:hover {
        background: #2c3e50;
        color: #fff;
    }
</style>
@endsection
