@extends('container.app')
@section('content')
    <div class="mx-auto w-full xl:w-2/3 px-4 lg:px-8">
        <div class="py-4">
            <a href="{{route('start')}}" class="bg-gray-100 rounded-lg hover:bg-gray-200 text-xs px-1 text-red-400"> Acceuil </a> <i class="text-xs fas fa-angle-right"></i>
            <a href="" class="bg-gray-100 rounded-lg hover:bg-gray-200 text-xs px-1 text-red-400"> Annonce </a> <i class="text-xs fas fa-angle-right"></i>
            <span class="text-xs"> Ajouter Annonce </span>
        </div>
        <h1 class="text-gray-600 text-2xl font-bold mt-4">
            Bienvenue!
        </h1>
        <p class="text-xs my-2">
            Créer votre compte sur Baqora.com pour beneficier de plusieurs avantages et pouvoir créer et suivre facilement vos annonces.
        </p>
        <hr>
    </div>


    <div class="mx-auto w-full xl:w-2/3 px-4 lg:px-8 mt-8 mb-12">
        <form method="POST" action="{{route('client.store')}}" class="w-full">
            @csrf
            <h2 class="text-gray-600 text-xl mb-4 text-red-300">
                Formulaire
            </h2>
            <div class="mb-4">
                <label for="nom" class="block text-sm text-gray-600">Votre Nom</label>
                <input class="p-2 border rounded w-full" type="text" name="nom" id="nom" placeholder="Votre Nom..." required>
                @error('nom')
                    <div class="text-red-500 py-2 text-xs"><i class="far fa-dot-circle"></i> {{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="telephone_01" class="block text-sm text-gray-600">Votre Téléphone</label>
                <input class="p-2 border rounded w-full" type="phone" name="telephone_01" id="telephone_01" placeholder="+2126666666" required>
                @error('telephone_01')
                    <div class="text-red-500 py-2 text-xs"><i class="far fa-dot-circle"></i> {{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm text-gray-600">Votre Email</label>
                <input class="p-2 border rounded w-full" type="email" name="email" id="email" placeholder="exemple@email.com" required>
                @error('email')
                    <div class="text-red-500 py-2 text-xs"><i class="far fa-dot-circle"></i> {{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="pwd" class="block text-sm text-gray-600">Votre Password</label>
                <input class="p-2 border rounded w-full" type="password" name="pwd" id="pwd" placeholder="********" required>
                @error('pwd')
                    <div class="text-red-500 py-2 text-xs"><i class="far fa-dot-circle"></i> {{ $message }}</div>
                @enderror
            </div>

            <label for="newsletter" class="text-md block"><input type="checkbox" name="newsletter" value="1" id="newsletter" class="mr-1 mb-4"> Recevoir les nouveautés via email</label>
            <div class="bg-green-50 py-1 px-2 border-green-200 text-xs text-green-900">
                En créant mon compte je reconnais avoir lu et accepté
                <a target="blank" class="text-blue-600 underline" href="{{route('pages.conditions')}}">
                    les Conditions Générales de Vente et les Conditions Générales d‘Utilisation,
                </a>
                    et je confirme être âgé d’au moins 18 ans.
            </div>
            <button type="submit" class="w-full md:w-1/2 rounded py-2 px-4 bg-blue-600 text-white mt-8">Créer mon compte</button>
        </form>
    </div>
@endsection
