@extends('container.app')
@section('title')
    Baqora : Résultats de recherches
@endsection
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
            var likes = {
                0: '<i class="fas fa-heart text-red-300"></i>',
                1: '<i class="far fa-heart"></i>'
            };

            var id_annonce = $(this).val();
            var that = $(this);
            var action = $(this).attr('data-action');
            if(action==1){
                $(this).attr('data-action', 0)
            }else{
                $(this).attr('data-action', 1)
            }
            $.get("/favorites/add/"+id_annonce+"/"+action, function(r){
                var toast = `
                    <div class="toast fixed bottom-0 right-0 bg-green-600 text-white rounded p-2 m-4 text-xs">
                        <i class="fas fa-heart"></i> Ajouter a votre annonces favorits
                    </div>
                `;

                $('body').append(toast);

                var timer = setTimeout(function(){
                    $(".toast").remove();
                }, 1000);

                if(action==1){
                    that.find('i').remove()
                    that.prepend(likes[0])

                }else{
                    that.find('i').remove()
                    that.prepend(likes[1])
                }
                that.find('span').html(r)
            });
        });
    });
</script>
@endsection

