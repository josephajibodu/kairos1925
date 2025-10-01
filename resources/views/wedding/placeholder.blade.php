@extends('layouts.template')

@section('title', $title ?? 'Page - Kairos1925')

@section('content')
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>{{ $title ?? 'Page Title' }}</h1>
                    <p>{{ $content ?? 'This page is under construction. Content will be added soon.' }}</p>
                    <a href="{{ route('home') }}" class="btn btn-primary">Back to Home</a>
                </div>
            </div>
        </div>
    </section>
@endsection
