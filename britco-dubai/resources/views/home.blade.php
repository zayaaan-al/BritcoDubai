@extends('layouts.app')

@section('title', 'Britco Dubai | Mobile Repair Training Institute & Technician Supply')
@section('meta_description', 'Britco Dubai – UAE\'s leading Mobile Repair Training Institute. Professional courses in smartphone, iPhone, Android & chip-level repair. Skilled technician supply services across UAE.')

@section('content')

  {{-- Hero --}}
  @include('partials.hero')

  {{-- About Us --}}
  @include('partials.about')

  {{-- Repair Services --}}
  @include('partials.services')

  {{-- Courses --}}
  @include('partials.courses')

  {{-- Technician Supply --}}
  @include('partials.technician')

  {{-- Testimonials --}}
  @include('partials.testimonials')

  {{-- Contact --}}
  @include('partials.contact')

@endsection