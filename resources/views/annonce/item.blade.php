<a href="{{route('annonce.show', $annonce)}}" class="md:flex border rounded-lg mb-4 overflow-hidden cursor-pointer hover:shadow hover:border-red-200">
    <div class="w-full md:w-60 max-h-36 overflow-hidden relative">
        <img class="w-full object-none object-center" src="{{ $annonce->default_image($annonce->annonce_UID) }}">
        <div class="rounded-lg text-xs px-1 py-1 bg-red-100 bg-opacity-20 absolute top-0 m-2">
            <i class="fas fa-camera"></i> {{$annonce->images->count()}}
        </div>
    </div>
    <div class="flex-1 py-3 px-4">
        <div class="flex flex-col justify-between h-full">
            <div class="">
                <div class="flex justify-between items-center mb-1">
                    <p class="text-lg">
                        {{$annonce->titre}}
                    </p>
                    <div class="rounded border border-red-300 text-red-300 text-xs py-0 px-4 hidden">
                        PRO
                    </div>
                </div>
                <div class="text-xs text-red-300">
                    <p>
                        <i class="fas fa-tag"></i> {{$annonce->prix}} MAD
                    </p>
                </div>
            </div>
            <div class="">
                <div class="flex justify-between items-end">
                    <div class="text-xs text-gray-400">
                        <p class="">
                            {{$annonce->category->annonce_category_name}} -> {{$annonce->sous_category->annonce_category_name}}
                        </p>
                        <p class="">
                            @if ($annonce->city) {{$annonce->city->city_name}} @else Tous le Maroc @endif @if ($annonce->sector) : {{$annonce->sector->city_sector_name}} @endif
                        </p>
                        <p class="text-red-800 font-bold pt-2" style="font-size:10px">
                            <i class="far fa-clock"></i> {{ $annonce['created_at']->diffForHumans() }}
                        </p>
                    </div>
                    <div class="flex gap-2 pb-2">
                        <button class="hover:text-red-300 hover:font-bold text-lg add_this_to_favorite" data-action="1" value="{{$annonce->id}}"><i class="far fa-heart"></i> <span class="text-xs text-gray-300"> {{$annonce->favorites->count()}}</span></button>
                        <button class="text-lg"><i class="far fa-eye"></i> <span class="text-xs text-gray-300"> {{$annonce->visited}} </span></button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</a>

