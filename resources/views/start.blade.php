@extends('container.app')
@section('title')
    Baqora : Site de petites annonces
@endsection
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
                <img src="{{ Storage::disk('local')->url($category->picture) }}" class="" />
                <div class="bg-red-50 w-full text-center text-gray-600 py-1">
                    {{ $category->annonce_category_name }}
                </div>
            </a>
        @endforeach
    </div>


</div>

<div class="mx-auto z-10 w-full xl:w-2/3 px-4 lg:px-8 mt-8 z-0 featured">


    @for ($i = 0; $i < 10; $i++)
        <div class="md:flex border rounded-lg mb-4 overflow-hidden cursor-pointer hover:shadow hover:border-red-200">
            <div class="w-full md:w-60 max-h-36 overflow-hidden relative">
                <div class="bg-gray-100 w-full h-full"></div>
                <div class="rounded-lg text-xs px-6 py-2 bg-gray-300 absolute top-0 m-2"></div>
            </div>
            <div class="flex-1 py-3 px-4">
                <div class="flex flex-col justify-between h-full">
                    <div class="">
                        <div class="flex justify-between items-center mb-1">
                            <div class="rounded-lg text-xs px-12 w-96 py-2 bg-gray-300"></div>
                            <div class="rounded border border-red-100 bg-red-50 text-xs py-2 px-12"></div>
                        </div>
                        <div class="rounded-lg text-xs px-12 py-2 bg-gray-300 w-32"></div>
                    </div>
                    <div class="">
                        <div class="flex justify-between items-end">
                            <div class="text-xs text-gray-400">
                                <div class="rounded-lg text-xs px-12 py-1 bg-gray-300 w-32 mb-2 mt-2"></div>
                                <div class="rounded-lg text-xs px-12 py-1 bg-gray-300 w-32 mb-2"></div>
                                <div class="rounded-lg text-xs px-12 py-1 bg-gray-300 w-32 mb-2"></div>
                            </div>
                            <div class="flex gap-2 pb-2">
                                <div class="rounded-lg text-xs py-2 bg-gray-300 w-12"></div>
                                <div class="rounded-lg text-xs py-2 bg-gray-300 w-12"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endfor

    <script>
        $(document).ready(function(){
            if(!$('.featured').hasClass('loaded')){
                var timer = setTimeout(() => {
                    $.get("/featured", function(r){
                        $('.featured').html(r)
                    });
                }, 1000);
            }
        });
    </script>

    {{-- @include('annonce.list') --}}
</div>

@endsection
