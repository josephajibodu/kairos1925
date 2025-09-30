@extends('layouts.template')

@section('title', 'Home - Esther & Joseph Wedding')

@section('content')
    @include('wedding.sections.hero')
    @include('wedding.sections.couple')
    @include('wedding.sections.story')
{{--    @include('wedding.sections.gallery')--}}
    @include('wedding.sections.events')
    @include('wedding.sections.gift')
@endsection
