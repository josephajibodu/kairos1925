@extends('layouts.template')

@section('title', 'Our Story - ' . config('wedding.site_name', 'Habibi'))

@section('content')
    @include('wedding.sections.story')
@endsection
