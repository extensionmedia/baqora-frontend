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
                console.log(r);
                that.find('i').addClass("text-red-300")
            });
        });
    });
</script>
