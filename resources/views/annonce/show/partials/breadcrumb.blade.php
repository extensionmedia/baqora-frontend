<div class="py-4">
    <a href="{{route('start')}}" class="bg-gray-100 rounded-lg hover:bg-gray-200 text-xs px-1 text-red-400"> Acceuil </a> <i class="text-xs fas fa-angle-right"></i>
    <a href="{{route('category.annonces', $annonce->category)}}" class="bg-gray-100 rounded-lg hover:bg-gray-200 text-xs px-1 text-red-400"> {{$annonce->category->annonce_category_name}} </a> <i class="text-xs fas fa-angle-right"></i>
    @if ($annonce->sous_category)
    <a href="" class="bg-gray-100 rounded-lg hover:bg-gray-200 text-xs px-1 text-red-400"> {{  Str::upper($annonce->sous_category->annonce_category_name) }} </a> <i class="text-xs fas fa-angle-right"></i>
    @endif
    <span class="text-xs"> {{$annonce->titre}} </span>
</div>
