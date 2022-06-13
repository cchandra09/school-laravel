@extends('frontend.layouts.app')
@section('content')

@include('frontend.home.hero')
@include('frontend.home.information')
@include('frontend.home.news')
{{-- @include('frontend.home.estrakuliler') --}}
@include('frontend.home.performance')

@endsection