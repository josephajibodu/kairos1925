@extends('layouts.template')

@section('title', 'RSVP - ' . config('wedding.site_name', 'Habibi'))

@section('content')
    @include('wedding.sections.rsvp')
@endsection
