<form action="/search" method="GET" class="border bg-white shadow-lg rounded w-full 2lg:w-6/12 lg:w-7/12 md:w-10/12 md:mx-auto lg:mx-auto p-4 pt-6 text-gray-500">
    <div class="flex items-center gap-4">
        <label for="offre" class="text-md"><input type="radio" name="type" value="1" id="offre" class="mr-1" checked> Offres</label>
        <label for="demande" class="text-md"><input type="radio" name="type" value="2" id="demande" class=""> Demandes</label>
        <label for="offre_location" class="text-md"><input type="radio" name="type" value="4" id="offre_location" class="mr-1"> Offres de location</label>
        <label for="demande_location" class="text-md"><input type="radio" name="type" value="5" id="demande_location" class=""> Demandes de location</label>
    </div>
    <div class="md:flex gap-2 mt-4 mb-2">
        <div class="flex-1 mb-4 md:mb-0">
            <select name="cat" id="search_annonce_category" class="w-full bg-gray-50 py-2 px-3 rounded border border-gray-200">
                <option value="-1">Tous les catégories</option>
                @foreach ($categories as $c)
                <option value="{{$c->slug}}">{{$c->annonce_category_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="flex-1 mb-4 md:mb-0">
            <input placeholder="Chercher..." type="text" name="text" id="" class="w-full bg-gray-50 py-2 px-3 rounded border border-gray-200">
        </div>
        <div class="flex-1 mb-4 md:mb-0">
            <select name="city" id="search_city" class="w-full bg-gray-50 py-2 px-3 rounded border border-gray-200">
                <option value="-1">Tous les villes</option>
                @foreach ($cities as $city)
                <option value="{{$city->id}}">{{$city->city_name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="selected mb-4"></div>
    <div class="searchSub"></div>

    <div class="text-center lg:text-left">
        <button type="submit" class="rounded py-2 px-4 bg-blue-600 text-white">CHERCHER</button>
    </div>
</form>

<script>
    $(document).ready(function(){

        $(document).on('click', '.select_this', function(){
            var id = $(this).attr('id');
            if( $(this).prop("checked") ){
                var cat = $( "#search_annonce_category option:selected" ).text();
                var subcat = $(this).parent().find('.text').text();
                var slug = $(this).val();
                $('.selected').append(`
                    <div class="flex gap-4 border-green-200 mb-2">
                        <p class="text-sm text-gray-800"><i class="fas fa-check"></i> `+cat+` <i class="text-xs fas fa-angle-right"></i> `+subcat+`</p>
                        <button data-id="`+id+`" class="remove_this text-red-600 text-xs"><i class="fas fa-times"></i> Supprimer</button>
                        <input type="hidden" name="sous_category_slug" value="`+slug+`">
                    </div>
                `);
            }else{
                $('.remove_this').each(function(){
                    if($(this).data('id') == id){
                        $(this).trigger('click');
                    }
                })
            }

        });

        $(document).on('click', '.remove_this', function(){
            var id = $(this).data('id');
            $( "#"+id ).prop( "checked", false );
            $(this).parent().remove();
        });

        $(document).on('click', '.select_this_city', function(){
            var id = $(this).attr('id');
            if( $(this).prop("checked") ){
                var city = $( "#search_city option:selected" ).text();
                var sector = $(this).parent().find('.text').text();
                var sector_id = $(this).val();
                $('.selected').append(`
                    <div class="flex gap-4 bg-gray-100 mb-2">
                        <p class="text-sm text-gray-800"><i class="fas fa-check"></i> `+city+` <i class="text-xs fas fa-angle-right"></i> `+sector+`</p>
                        <button data-id="`+id+`" class="remove_this_city text-red-600 text-xs"><i class="fas fa-times"></i> Supprimer</button>
                        <input type="hidden" name="city_sector_id" value="`+sector_id+`">
                    </div>
                `);
            }else{
                $('.remove_this_city').each(function(){
                    if($(this).data('id') == id){
                        $(this).trigger('click');
                    }
                })
            }

        });

        $(document).on('click', '.remove_this_city', function(){
            var id = $(this).data('id');
            $( "#"+id ).prop( "checked", false );
            $(this).parent().remove();
        });



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
                            <label for="annonce_category_`+val.id+`" class="inline-block text-sm border bg-red-100 hover:bg-red-300 cursor-pointer rounded-lg px-2 py-1 mb-2"><input type="checkbox" name="" value="`+val.slug+`" id="annonce_category_`+val.id+`" class="mr-1 select_this"><span class='text'>`+val.annonce_category_name+`</span></label>
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
                            <label for="city_sector_`+val.id+`" class="inline-block text-sm border bg-red-100 hover:bg-red-300 cursor-pointer rounded-lg px-2 py-1 mb-2"><input type="checkbox" name="" value="`+val.id+`" id="city_sector_`+val.id+`" class="mr-1 select_this_city"><span class='text'>`+val.city_sector_name+`</span></label>
                        `);
                    })
                });
            }

        });

    });
</script>
