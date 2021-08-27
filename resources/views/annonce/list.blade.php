<h1 class="text-bold text-xl my-2">Annonces à la une!</h1>
@foreach ($annonces as $annonce)
    @include('annonce.item')
@endforeach
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
