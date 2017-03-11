@extends('layout.core')

@section('title')Welcome to Task App
@endsection

@section('content')
    <div class="jumbotron">
        <div class="text-center">
            <h1 class="display-5">The Task List Application</h1>
            <p>This website is simple project which facilitates user authentication and CRUD.</p>
            <p>To get you started why don't you <a href="">make an account</a>.</p>
            <p>Already have an account? <a href="#">Sign in here</a>.</p>
            
            <hr class="my-5">
            
            <p>It uses <a href="https://v4-alpha.getbootstrap.com/">Twitter Bootstrap</a> for the front-end and <a href="https://laravel.com/">Laravel 5.4</a> for back-end.</p>
            <p class="lead">
                <a href="#" class="btn btn-primary">Learn More</a>
            </p>
        </div>
    </div>
@endsection