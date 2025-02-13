@extends('layout.layout')

@section('contents')
<section class="banner" style="background-color: rgb(89, 129, 170);height:20px">
    <h1 class="fw-bold" style="text-align: center;color:white" >Create a Blog</h1>
</section>

<div class="container py-5 " style="height: 50vh">
    <form action="{{ route('blog.generate') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Blog Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        
        <div class="mb-3">
            <label for="focus_keyword" class="form-label">Focus Keyword</label>
            <input type="text" class="form-control" id="focus_keyword" name="focus_keyword" required>
        </div>

        <button type="submit" class="btn btn-primary">Generate Blog</button>
    </form>
</div>
@endsection