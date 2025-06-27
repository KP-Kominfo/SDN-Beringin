@extends('app')

@section('content')
    <x-carousel :id="'carousel-top'" :slides="$carouselTopSlides" />
    <x-sambutan />
    <x-sejarah />
    <x-carousel :id="'carousel-bottom'" :slides="$carouselBottomSlides" />
@endsection


@section('scripts')
    <script src="{{ asset('js/carousel.js') }}"></script>
@endsection
