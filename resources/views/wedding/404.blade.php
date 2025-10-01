@extends('layouts.template')

@section('title', '404 - Page Not Found - Kairos1925')

@section('content')
    <section class="section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <h1>404</h1>
                    <h2>Page Not Found</h2>
                    <p>The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
                    <a href="{{ route('home') }}" class="btn btn-primary">Go Home</a>
                </div>
            </div>
        </div>
    </section>
@endsection
