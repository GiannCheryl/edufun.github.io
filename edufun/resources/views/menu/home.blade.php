@extends('layout.header')

@section('title', 'Home - EduFun')

@section('content')
<div class="row">
    <div class="col-12">
        <img src="{{ asset('images/banner.png') }}" alt="EduFun Banner" class="img-fluid" 
        style="width: 100%; max-height: 400px; object-fit: cover; margin-bottom: 20px;">
    </div>
</div>

<div class="row">
    <div class="col-12">
        <h2>Popular Articles</h2>
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">Article Title</h5>
                <p class="card-text">Info | Date: 01/01/2024 | Author: John Doe</p>
                <a href="/article/detail" class="btn btn-secondary">Read more...</a>
            </div>
        </div>
    </div>
</div>
@endsection