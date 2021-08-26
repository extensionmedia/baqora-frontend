@extends('container.app')
@section('content')
<div class="w-full bg-red-300 py-4 pb-16">
    <div class="mx-auto w-full xl:w-2/3 px-8">
        <div class="text-center py-4">
            <h1 class="text-2xl xl:text-3xl"><b>Baqora</b> Le Premier Site Des Petites Annonces Au Maroc</h1>
            <p class="text-sm lg:text-md">
                Deposer vos annonces en toute securite et fetes partie d'un nombre indefinie des annonces live en ce moment
            </p>
        </div>
    </div>
    <div class="w-full px-4 lg:p-0">
        {{search()}}
    </div>
</div>
<div class="mx-auto w-full xl:w-2/3 px-4 lg:px-8 mt-8">
    <h1 class="text-bold text-xl my-2">Top Categories</h1>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 mb-8 z-0">
        @foreach ($categories as $category)
            <a href="/search?cat={{ $category->slug }}" class="border mb-4 border-gray-200 border-2 rounded hover:shadow-lg hover:border-red-300 hover:border-4">
                <img src="storage/{{ $category->picture }}" class="" />
                <div class="bg-red-50 w-full text-center text-gray-600 py-1">
                    {{ $category->annonce_category_name }}
                </div>
            </a>
        @endforeach
    </div>


</div>

<div class="mx-auto z-10 w-full xl:w-2/3 px-4 lg:px-8 mt-8 z-0">
    @include('annonce.list')
</div>

@endsection
