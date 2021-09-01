@extends('container.app')
@section('content')
    <div class="mx-auto w-full xl:w-2/3 px-4 lg:px-8">
        <div class="py-4">
            <a href="{{route('start')}}" class="bg-gray-100 rounded-lg hover:bg-gray-200 text-xs px-1 text-red-400"> Acceuil </a> <i class="text-xs fas fa-angle-right"></i>
            <a href="" class="bg-gray-100 rounded-lg hover:bg-gray-200 text-xs px-1 text-red-400"> Utilisateur </a> <i class="text-xs fas fa-angle-right"></i>
            <span class="text-xs"> Créer Compte </span>
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
        @if ($errors->any())
            <div class="border border-red-100 bg-red-50 py-2 px-3 mb-4 text-xs">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="mb-1 text-red-500 p-1"><i class="far fa-dot-circle"></i> {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{route('client.store')}}" class="w-full">
            @csrf
            <h2 class="text-gray-600 text-xl mb-4 text-red-300">
                Formulaire
            </h2>
            <div class="mb-4">
                <label for="nom" class="block text-sm text-gray-600">Votre Nom</label>
                <input class="p-2 border rounded w-full" type="text" name="nom" id="nom" placeholder="Votre Nom...">
            </div>
            <div class="mb-4">
                <label for="telephone_01" class="block text-sm text-gray-600">Votre Téléphone</label>
                <input class="p-2 border rounded w-full" type="phone" name="telephone_01" id="telephone_01" placeholder="+2126666666">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm text-gray-600">Votre Email</label>
                <input class="p-2 border rounded w-full" type="email" name="email" id="email" placeholder="exemple@email.com">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm text-gray-600">Votre Password</label>
                <input class="p-2 border rounded w-full" type="password" name="password" id="password" placeholder="********">
            </div>

            <label for="newsletter" class="text-md block"><input type="checkbox" name="newsletter" value="1" id="newsletter" class="mr-1 mb-4"> Recevoir les nouveautés via email</label>
            <label for="conditions" class="text-md block"><input type="checkbox" name="conditions" value="1" id="conditions" class="mr-1 mb-8"> J'accepte les conditions d'utilisations <a target="blank" class="text-blue-600 underline" href="{{route('pages.conditions')}}">Lire ...</a></label>

            <button type="submit" class="w-full md:w-1/2 rounded py-2 px-4 bg-blue-600 text-white">Créer mon compte</button>
        </form>
    </div>
@endsection
