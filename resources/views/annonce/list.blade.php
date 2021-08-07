<h1 class="text-bold text-xl my-2">Annonces à la une!</h1>
@foreach ($annonces as $annonce)
    @include('annonce.item')
@endforeach
