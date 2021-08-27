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
<script>
    $(document).ready(function(){
        $('.add_this_to_favorite').click(function(e){
            e.preventDefault();
            var id_annonce = $(this).val();
            var that = $(this);
            $.get("/favorites/add/"+id_annonce, function(r){
                var toast = `
                    <div class="toast fixed bottom-0 right-0 bg-green-600 text-white rounded p-2 m-4 text-xs">
                        <i class="fas fa-heart"></i> Ajouter a votre annonces favorits
                    </div>
                `;

                $('body').append(toast);

                var timer = setTimeout(function(){
                    $(".toast").remove();
                }, 1000);

                console.log(r);
                that.find('i').addClass("text-red-300")
            });
        });
    });
</script>
@endsection

