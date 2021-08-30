<h1 class="text-bold text-xl my-2">Annonces à la une!</h1>
@foreach ($annonces as $annonce)
    @include('annonce.item')
@endforeach
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
