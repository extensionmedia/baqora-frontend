@extends('container.app')
@section('title')
    {{$annonce->titre}}
@endsection
@section('content')
    <div class="mx-auto w-full xl:w-2/3 px-4 lg:px-8">
        @include('annonce.show.partials.breadcrumb')

        <div class="md:flex w-full gap-4">
            <div class="md:w-2/3 mb-4">
                @include('annonce.show.partials.images')
                @include('annonce.show.partials.description')
            </div>
            <div class="md:w-1/3 mb-4">
                @include('annonce.show.partials.client')
            </div>

        </div>
    </div>

@endsection
