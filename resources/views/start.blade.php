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
            <div class="md:flex gap-2 my-4">
                <div class="flex-1 mb-4 md:mb-0">
                    <select name="" id="search_annonce_category" class="w-full bg-gray-50 py-2 px-3 rounded border border-gray-200">
                        <option value="-1">Tous les catégories</option>
                        @foreach ($categories as $c)
                        <option value="{{$c->id}}">{{$c->annonce_category_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex-1 mb-4 md:mb-0">
                    <input placeholder="Chercher..." type="text" name="" id="" class="w-full bg-gray-50 py-2 px-3 rounded border border-gray-200">
                </div>
                <div class="flex-1 mb-4 md:mb-0">
                    <select name="" id="search_city" class="w-full bg-gray-50 py-2 px-3 rounded border border-gray-200">
                        <option value="-1">Tous les villes</option>
                        @foreach ($cities as $city)
                        <option value="{{$city->id}}">{{$city->city_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="searchSub">

            </div>

            <div class="text-center lg:text-left">
                <button class="rounded py-2 px-4 bg-blue-600 text-white">CHERCHER</button>
            </div>
        </div>
    </div>
</div>
<div class="mx-auto w-full xl:w-2/3 px-4 lg:px-8 mt-8">
    <h1 class="text-bold text-xl my-2">Top Categories</h1>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 mb-8 z-0">
        @foreach ($categories as $category)
            <a href="{{ route('category.annonces', $category) }}" class="border mb-4 border-gray-200 border-2 rounded hover:shadow-lg hover:border-red-300 hover:border-4">
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

<script>
    $(document).ready(function(){
        $('#search_annonce_category').change(function(){
            var id_annonce_category = $(this).val();
            if(id_annonce_category == '-1'){
                $(".args.subCategory").html(``);
            }else{
                $('.searchSub').html('<div class="mb-4 args subCategory"><i class="fas fa-spinner fa-spin"></i></div>');
                $.get("/search/annonce_category/"+id_annonce_category, function(r){
                    $(".args.subCategory").html(``);
                    $.each(r, function(i, val){
                        $(".args.subCategory").append(`
                            <label for="annonce_category_`+val.id+`" class="inline-block text-sm border bg-red-100 hover:bg-red-300 cursor-pointer rounded-lg px-2 py-1 mb-2"><input type="checkbox" name="annonce_category" id="annonce_category_`+val.id+`" class="mr-1">`+val.annonce_category_name+`</label>
                        `);
                    })
                });
            }

        });

        $('#search_city').change(function(){
            var id_city = $(this).val();
            if(id_city == '-1'){
                $(".args.sector").html(``);
            }else{
                $('.searchSub').html('<div class="mb-4 args sector"><i class="fas fa-spinner fa-spin"></i></div>');
                $.get("/search/city_sector/"+id_city, function(r){
                    $(".args.sector").html(``);
                    $.each(r, function(i, val){
                        $(".args.sector").append(`
                            <label for="city_sector_`+val.id+`" class="inline-block text-sm border bg-red-100 hover:bg-red-300 cursor-pointer rounded-lg px-2 py-1 mb-2"><input type="checkbox" name="city_sector" id="city_sector_`+val.id+`" class="mr-1">`+val.city_sector_name+`</label>
                        `);
                    })
                });
            }

        });

    });
</script>

@endsection
