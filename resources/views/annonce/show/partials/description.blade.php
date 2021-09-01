<div class="w-full flex justify-between">
    <div class="">
        <h1 class="text-bold text-xl xl:text-2xl my-2">{{$annonce->titre}}</h1>
        <p class="text-bold text-sm xl:text-base">
            {{$annonce->category->annonce_category_name}} @if($annonce->sous_category) -> {{$annonce->sous_category->annonce_category_name}} @endif
        </p>
    </div>
    <div class="">
        <button class="shadow-lg rounded-full border text-lg text-red-300 h-10 w-10 hover:bg-red-300 hover:text-white"><i class="far fa-heart"></i></button>
        <button class="shadow-lg rounded-full border text-lg text-red-300 h-10 w-10 hover:bg-red-300 hover:text-white"><i class="fas fa-share-alt"></i></button>
    </div>
</div>
<div class="text-2xl my-4 text-red-600 flex justify-between">
    <div class="">
        <i class="fas fa-tag text-lg"></i> {{$annonce->prix}} MAD
    </div>
    <button class="text-xs text-yellow-500 hover:text-red-500">
        <i class="fas fa-info mr-1"></i>
        Signaler l'annonce
    </button>
</div>
<div class="flex gap-4 text-sm">
    <div class=""><i class="far fa-clock"></i> {{$annonce->created_at->format('d/m/Y H:i') }}</div>
    <div class="">
        <i class="fas fa-map-marker"></i>
        @if ($annonce->city)
            <a href="/search?city={{$annonce->city->id}}" class="hover:underline hover:text-red-300"> {{$annonce->city->city_name}} </a>
            @if ($annonce->sector)
                <i class="text-xs fas fa-angle-right"></i>
                <a href="/search?city_sector_id={{$annonce->sector->id}}" class="hover:underline hover:text-red-300"> {{$annonce->sector->city_sector_name}} </a>
            @endif
        @else
            <a href="/search?city=-1" class="hover:underline hover:text-red-300"> Tous le Maroc </a>
        @endif

    </div>
</div>

<hr class="my-4">

<h1 class="text-bold xl:text-xl my-2">Déscription</h1>
<p class="text-sm">
    {!! $annonce->description !!}
</p>
