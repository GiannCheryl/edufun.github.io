@extends('layout.header')

@section('title', 'About Us - EduFun')

@section('content')
<div class="row">
    <div class="col-12">
        <h1>{{ $about->title }}</h1>
        <p>{{ $about->content }}</p>
    </div>
</div>
@endsection
