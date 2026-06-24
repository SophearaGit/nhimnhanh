@extends('frontend.layouts.pages-layout')
@section('page_title', isset($page_title) ? $page_title : 'Page Title Here')
@section('content')
    @include('frontend.pages.Home.partials.banner')
    @include('frontend.pages.Home.partials.about')
    @include('frontend.pages.Home.partials.services')
    @include('frontend.pages.Home.partials.projects')
    @include('frontend.pages.Home.partials.fact')
    @include('frontend.pages.Home.partials.resume')
    {{-- @include('frontend.pages.Home.partials.testimonial') --}}
    @include('frontend.pages.Home.partials.partner')
    @include('frontend.pages.Home.partials.pricing')
    @include('frontend.pages.Home.partials.faq')
    @include('frontend.pages.Home.partials.contact')
    {{-- @include('frontend.pages.Home.partials.blog') --}}
    @include('frontend.pages.Home.partials.promo')
@endsection
