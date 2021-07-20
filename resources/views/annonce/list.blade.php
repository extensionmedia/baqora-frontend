<h1 class="text-bold text-xl my-2">Annonces à la une!</h1>
@for ($i = 0; $i < 10; $i++)
    @include('annonce.item')
@endfor
