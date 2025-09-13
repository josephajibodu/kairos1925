@extends('layouts.template')

@section('title', 'Gallery - ' . config('wedding.site_name', 'Habibi'))

@section('content')
    @include('wedding.sections.gallery')
@endsection
