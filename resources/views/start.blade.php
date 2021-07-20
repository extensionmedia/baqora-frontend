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
        <div class="border bg-white shadow-lg rounded w-full 2lg:w-6/12 lg:w-7/12 md:w-10/12 md:mx-auto lg:mx-auto p-4 pt-6 text-gray-500">
            <div class="flex items-center gap-4">
                <label for="offre" class="text-md"><input type="radio" name="type" id="offre" class="mr-1" checked> Offres</label>
                <label for="demande" class="text-md"><input type="radio" name="type" id="demande" class=""> Demandes</label>
            </div>
            <div class="flex gap-2 my-4">
                <div class="flex-1">
                    <select name="" id="" class="w-full bg-gray-50 py-2 px-3 rounded border border-gray-200">
                        <option value="">Categories</option>
                    </select>
                </div>
                <div class="flex-1">
                    <input placeholder="Chercher..." type="text" name="" id="" class="w-full bg-gray-50 py-2 px-3 rounded border border-gray-200">
                </div>
                <div class="flex-1">
                    <input placeholder="ville" type="text" name="" id="" class="w-full bg-gray-50 py-2 px-3 rounded border border-gray-200">
                </div>
            </div>
            <div class="text-center lg:text-left">
                <button class="rounded py-2 px-4 bg-blue-600 text-white">CHERCHER</button>
            </div>
        </div>
    </div>

</div>
<div class="mx-auto z-10 w-full xl:w-2/3 px-4 lg:px-8 mt-8 z-0">
    @php
        $images = [
            "https://www.leboncoin.fr/_next/static/vacances-38879ace.webp",
            "https://www.leboncoin.fr/_next/static/vetements-76b5c945.webp",
            "https://www.leboncoin.fr/_next/static/ventes_immo-6c146029.webp",
            "https://www.leboncoin.fr/_next/static/voitures-b5f976d6.webp",
            "https://www.leboncoin.fr/_next/static/ameublement-e02cc20c.webp",
            "https://www.leboncoin.fr/_next/static/electromenager-c2e8abe1.webp",
            "https://www.leboncoin.fr/_next/static/informatique-b7973411.webp",
            "https://www.leboncoin.fr/_next/static/livres-3fc73a23.webp",
            "https://www.leboncoin.fr/_next/static/vetements-76b5c945.webp",
            "https://www.leboncoin.fr/_next/static/ameublement-e02cc20c.webp",
            "https://www.leboncoin.fr/_next/static/ameublement-e02cc20c.webp",
        ]
    @endphp
    <h1 class="text-bold text-xl my-2">Top Categories</h1>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 mb-8 z-0">
        @foreach ($categories as $category)
            <a href="{{ $category->slug }}" class="border mb-4 border-white border-2 rounded hover:shadow-lg hover:border-red-300 hover:border-4">
                <img src="{{$images[$loop->index]}}" class="rounded shadow border flex-1 h-40" />
                <div class="w-full text-center text-white -mt-12">
                    {{ $category->annonce_category_name }}
                </div>
            </a>
        @endforeach
    </div>


</div>

<div class="mx-auto z-10 w-full xl:w-2/3 px-4 lg:px-8 mt-8 z-0">
    @include('annonce.list')
</div>

@include('container.foobar')

@endsection
