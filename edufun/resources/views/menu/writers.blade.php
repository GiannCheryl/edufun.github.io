@extends('layout.header')

@section('title', 'Writers - EduFun')

@section('content')
<div class="row">
    <div class="col-12">
        <h1>Meet Our Writers</h1>
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">Writer Name</h5>
                <p class="card-text">Brief bio of the writer...</p>
                <a href="/writer/detail" class="btn btn-secondary">See Articles by This Writer</a>
            </div>
        </div>
    </div>
</div>
@endsection
