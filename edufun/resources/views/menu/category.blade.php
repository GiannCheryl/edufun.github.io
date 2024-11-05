@extends('layout.header')

@section('title', 'Categories - EduFun')

@section('content')
<div class="row">
    <div class="col-12">
        <h1>Select a Category</h1>
        <ul>
            <li><a href="/category/data-science">Data Science</a></li>
            <li><a href="/category/network-security">Network Security</a></li>
            <li><a href="/category/interactive-multimedia">Interactive Multimedia</a></li>
            <li><a href="/category/software-engineering">Software Engineering</a></li>
        </ul>
    </div>
</div>
@endsection
