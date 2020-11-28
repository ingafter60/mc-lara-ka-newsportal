@extends('front.layouts.master')

@section('content')
               <!-- header_section_wrapper -->
               @include('front.layouts.components.home.header-section')

               <!-- Feature News Section -->
               @include('front.layouts.components.home.feature-news')

               <!-- Category News Section -->
               @include('front.layouts.components.home.category')
@endsection