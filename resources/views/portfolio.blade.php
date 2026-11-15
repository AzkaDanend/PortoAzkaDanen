@extends('layouts.app')

@section('title', $seo['title'])
@section('meta_description', $seo['description'])
@section('content')
    @include('sections.hero')
    @include('sections.about')
    @include('sections.education')
    @include('sections.skills-projects')
    @include('sections.experience-certifications')
    @include('sections.github-contact')
@endsection
