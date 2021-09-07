@extends('container.app')
@section('title')
    Ajouter une annonces
@endsection
@section('content')
    <div class="mx-auto w-full xl:w-2/3 px-4 lg:px-8">
        <div class="py-4">
            <a href="{{route('start')}}" class="bg-gray-100 rounded-lg hover:bg-gray-200 text-xs px-1 text-red-400"> Acceuil </a> <i class="text-xs fas fa-angle-right"></i>
            <a href="" class="bg-gray-100 rounded-lg hover:bg-gray-200 text-xs px-1 text-red-400"> Annonce </a> <i class="text-xs fas fa-angle-right"></i>
            <span class="text-xs"> Ajouter Annonce </span>
        </div>
        <h1 class="text-gray-600 text-2xl font-bold mt-4">
            Déposer une annonce
        </h1>
        <p class="text-xs my-2">
            Commençons par l’essentiel !
        </p>
        <hr>
    </div>


    <div class="mx-auto w-full xl:w-2/3 px-4 lg:px-8 mt-8 mb-12">
        <form method="POST" action="{{route('client.store')}}" class="w-full">
            @csrf
            <h2 class="text-gray-600 text-xl mb-4 text-red-300">
                General
            </h2>
            <div class="mb-4">
                <label for="titre" class="block text-sm text-gray-600">Titre de votre annonce</label>
                <input class="px-2 py-1 border border-gray-400 rounded w-full" type="text" name="titre" id="titre" placeholder="" required>
                @error('titre')
                    <div class="text-red-500 py-2 text-xs"><i class="far fa-dot-circle"></i> {{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="prix" class="block text-sm text-gray-600">Prix</label>
                <input class="px-2 py-1 border border-gray-400 rounded text-right w-48 bg-red-50" type="number" name="prix" id="prix" placeholder="0.00" required>
                @error('titre')
                    <div class="text-red-500 py-2 text-xs"><i class="far fa-dot-circle"></i> {{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="annonce_category_id" class="block text-sm text-gray-600">Categorie</label>
                <select name="annonce_category_id" id="annonce_category_id" class=" border border-gray-400 py-1 px-2 rounded w-full">
                    <option value="-1"> -- Categorie </option>
                    @foreach ($categories as $c)
                        <option value="{{$c->slug}}"> {{$c->annonce_category_name}}</option>
                    @endforeach
                </select>
                @error('annonce_category_id')
                    <div class="text-red-500 py-2 text-xs"><i class="far fa-dot-circle"></i> {{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="annonce_sous_category_id" class="block text-sm text-gray-600">Sous Categorie <i class="fas fa-spinner fa-spin hidden"></i></label>
                <select name="annonce_sous_category_id" id="annonce_sous_category_id" class=" border border-gray-400 py-1 px-2 rounded w-full">
                    <option value="-1"> -- Sous Categorie </option>
                </select>
                @error('annonce_sous_category_id')
                    <div class="text-red-500 py-2 text-xs"><i class="far fa-dot-circle"></i> {{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="city_id" class="block text-sm text-gray-600">Ville</label>
                <select name="city_id" id="city_id" class=" border border-gray-400 py-1 px-2 rounded w-full">
                    <option value="-1"> -- Ville </option>
                    @foreach ($cities as $c)
                        <option value="{{$c->id}}"> {{$c->city_name}}</option>
                    @endforeach
                </select>
                @error('city_id')
                    <div class="text-red-500 py-2 text-xs"><i class="far fa-dot-circle"></i> {{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="city_sector_id" class="block text-sm text-gray-600">Secteur <i class="fas fa-spinner fa-spin hidden"></i></label>
                <select name="city_sector_id" id="city_sector_id" class=" border border-gray-400 py-1 px-2 rounded w-full">
                    <option value="-1"> -- Secteur </option>
                </select>
                @error('city_sector_id')
                    <div class="text-red-500 py-2 text-xs"><i class="far fa-dot-circle"></i> {{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="description" class="block text-sm text-gray-600">Description de l'annonce</label>
                <textarea class="p-2 border border-gray-400 rounded w-full max-w-full h-32" type="text" name="description" id="message" placeholder=""></textarea>
            </div>

            <input type="file" id="picture" class="hidden">
            <div class="mb-4 bg-gray-100 flex gap-4 items-center p-2 overflow-auto">
                @for ($i = 1; $i < 6; $i++)
                    @if ($i == 1)
                        <div class="border-2 rounded border-red-300 text-red-300 w-32 p-6 text-center cursor-pointer hover:bg-red-50 select_picture">
                            <i class="fas fa-camera-retro text-6xl"></i>
                            <div class="w-full text-center py-2 text-sm font-bold">
                                Ajouter Photo
                            </div>
                        </div>
                    @else
                        <div class="border rounded border-gray-300 text-gray-600 w-32 p-6 text-center">
                            <div class="icon">
                                <i class="fas fa-camera-retro text-6xl"></i>
                                <div class="w-full text-center py-2 text-sm font-bold">
                                    Photo {{$i-1}}
                                </div>
                            </div>
                            <div class="pic hidden">
                                <img class="selected_picture" src="#" alt="your image" />
                            </div>
                        </div>
                    @endif
                @endfor
            </div>


            <button type="submit" class="w-full md:w-1/2 rounded py-2 px-4 bg-blue-600 text-white mt-8">Deposer mon annonce</button>
        </form>
    </div>
    <script>
        $(document).ready(function(){
            $('#annonce_category_id').change(function(){
                var id_annonce_category = $(this).val();
                $('#annonce_sous_category_id').empty().append('<option selected value="-1"> -- Sous Categorie </option>');
                $('#annonce_sous_category_id').parent().find('i').removeClass('hidden');
                if(id_annonce_category != '-1'){
                    $.get("/search/annonce_category/"+id_annonce_category, function(r){
                        $.each(r, function(i, val){
                            $('#annonce_sous_category_id').append('<option value="'+val.id+'">'+val.annonce_category_name+'</option>');
                        });
                        $('#annonce_sous_category_id').parent().find('i').addClass('hidden');
                    });
                }
            });

            $('#city_id').change(function(){
                var city_id = $(this).val();
                $('#city_sector_id').empty().append('<option selected value="-1"> -- Sous Categorie </option>');
                $('#city_sector_id').parent().find('i').removeClass('hidden');
                if(city_id != '-1'){
                    $.get("/search/city_sector/"+city_id, function(r){
                        $.each(r, function(i, val){
                            $('#city_sector_id').append('<option value="'+val.id+'">'+val.city_sector_name+'</option>');
                        });
                        $('#city_sector_id').parent().find('i').addClass('hidden');
                    });
                }
            });

            $('.select_picture').click(function(){
                if($('.pic.hidden').length > 0){
                    $("#picture").trigger('click');
                }
            });


            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('.pic.hidden').first().parent().find('.icon').addClass('hidden');
                        $('.pic.hidden').first().find('.selected_picture').attr('src', e.target.result);
                        $('.pic.hidden').first().removeClass('hidden');
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#picture").change(function(){
                readURL(this);
            });


        });
    </script>
@endsection
