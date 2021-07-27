@extends('container.app')
@section('content')
    <div class="mx-auto w-full xl:w-2/3 px-4 lg:px-8">
        @include('annonce.show.partials.breadcrumb')

        <div class="flex w-full gap-4">
            <div class="w-2/3">
                @include('annonce.show.partials.images')
            </div>
            <div class="w-1/3">
                @include('annonce.show.partials.client')
            </div>

        </div>
    </div>

@endsection
