<div class=" border rounded-lg shadow pt-3 pb-6 px-4">
    <div class="border-b border-red-300 flex py-4 items-center gap-4">
        <a href="/search?client={{$annonce->client->id}}" class="h-16 w-16 rounded-full overflow-hidden">
            <img class="w-full" src="https://upload.wikimedia.org/wikipedia/commons/a/a0/Arh-avatar.jpg" alt="">
        </a>
        <a href="/search?client={{$annonce->client->id}}" class="flex-1 hover:underline">
            {{$annonce->client->nom}}
        </a>
        <a href="/search?client={{$annonce->client->id}}"><i class="fas fa-angle-right text-2xl text-red-300"></i></a>
    </div>

    <div class="mt-6 w-full">
        <a href="" class="client_message w-full bg-red-300 hover:bg-red-400 text-white text-center rounded mb-2 block py-4 text-sm">Envoyer un message</a>
        <button data-id="{{$annonce->client->id}}" class="client_show_phone  w-full border border-red-300 text-red-600 text-center rounded block py-4 text-sm hover:bg-red-50">Afficher Numéro Téléphone</button>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('.client_show_phone').on('click', function(){
            var client_id = $(this).data('id');
            var that = $(this);
            $.ajax({
                url: "{{route('client.get_phone', $annonce->client)}}",
                success: function(r){
                    that.parent().append(r);
                    that.remove()
                }
            });


        });
    });
</script>
