@extends('layouts.template')

@section('title', 'Home - ' . config('wedding.couple.display_names', 'Lucas & Mia') . ' Wedding')

@section('content')
    @include('wedding.sections.hero')
    @include('wedding.sections.couple')
    @include('wedding.sections.story')
    @include('wedding.sections.gallery')
    @include('wedding.sections.team')
    @include('wedding.sections.rsvp')
    @include('wedding.sections.events')
    @include('wedding.sections.blog')
@endsection
