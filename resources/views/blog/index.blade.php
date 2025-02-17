@extends('layout.layout')

@section('contents')
<section class="banner" style="background-color: rgb(89, 129, 170);height:20px">
    <h1 class="fw-bold" style="text-align: center;color:black" >Create a Blog</h1>
</section>

<div class="container py-5 " style="height: 50vh">
    <form action="{{ route('blog.generate') }}" method="POST">
        @csrf
        <div class="mb-3" id="blog_title" >
            <label for="title" class="form-label">Blog Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        
        <div class="mb-3 " id="focus_keyword">
            <label for="focus_keyword" class="form-label">Focus Keyword</label>
            <input type="text" class="form-control" id="focus_keyword" name="focus_keyword" required>
        </div>

        <button type="submit" class="btn btn-primary" id="generate">Generate Blog</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/driver.js@latest/dist/driver.js.iife.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/driver.js@latest/dist/driver.css"/>

<script>
    const driver = window.driver.js.driver;

// const driverObj = driver();

// driverObj.highlight({
//   element: "#blog_title",
//   popover: {
//     title: "Blog Title",
//     description: "Enter Your Blog title  here"
//   }
// });

const driverObj = driver({
  showProgress: true,
  steps: [
    { element: '#blog_title', popover: { title: 'Blog Title', description: 'Enter Your Blog title  here'}},
    { element: '#focus_keyword', popover: { title: 'focus Keyword', description: 'It works the same in these keyword  ', side: "bottom", align: 'start' }},
    { element: '#generate', popover: { title: 'Generate it', description: 'It works...', side: "bottom", align: 'start' }},
   
  ],
  
});

driverObj.drive();
</script>
@endsection