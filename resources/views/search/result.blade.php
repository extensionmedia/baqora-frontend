@extends('container.app')
@section('content')

<div class="mx-auto w-full xl:w-2/3 px-4 lg:px-8">
    <div class="py-4">
        <a href="{{route('start')}}" class="bg-gray-100 rounded-lg hover:bg-gray-200 text-xs px-1 text-red-400"> Acceuil </a> <i class="text-xs fas fa-angle-right"></i>
        @isset($bread['cat'])
            <a href="/search?cat={{$bread['cat'][0]}}" class="bg-gray-100 rounded-lg hover:bg-gray-200 text-xs px-1 text-red-400"> {{$bread['cat'][1]}} </a> <i class="text-xs fas fa-angle-right"></i>
        @endisset
        @isset($bread['city'])
            <a href="/search?city={{$bread['city'][0]}}" class="bg-gray-100 rounded-lg hover:bg-gray-200 text-xs px-1 text-red-400"> {{$bread['city'][1]}} </a> <i class="text-xs fas fa-angle-right"></i>
        @endisset
        <span class="text-xs"> Recherche </span>
    </div>
</div>
<div class="mx-auto w-full xl:w-2/3 px-4 lg:px-8 mb-12">
    <div class="w-full">
        <div class="w-full py-2 mb-4">
            {{ $annonces->links() }}
        </div>
        @foreach ($annonces as $annonce)
            @include('annonce.item')
        @endforeach
        <div class="w-full py-2">
            {{ $annonces->links() }}
        </div>
    </div>
</div>
@endsection
