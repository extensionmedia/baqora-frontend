<form class="modal_content border w-96 px-8 mx-auto mt-12 bg-white pb-8">

    <div class="text-xl text-center w-full py-6">
        <div class="text-2xl"><i class="far fa-user"></i></div>
        Bonjour !
        <p class="text-xs text-gray-500">
            Connectez-vous pour découvrir toutes nos fonctionnalités.
        </p>
    </div>
    @csrf
    <label for="email">
        <span class="block font-bold text-xs">Email</span>
        <input class="border border-gray-300 w-full text-sm px-2 py-2 mb-4" type="email" name="email" placeholder="john@email.com" required>
    </label>

    <label for="email">
        <span class="block font-bold text-xs">Mot de passe</span>
        <input class="border border-gray-300 w-full text-sm px-2 py-2" type="password" name="password" placeholder="******" required>
    </label>

    <a href="" class="text-right w-full text-red-300 underline text-xs">
        Mot de passe oublié?
    </a>

    <div class="text-center my-5">
        <button type="submit" class="w-full rounded py-2 px-4 bg-blue-600 text-white">Se connecter</button>
    </div>

    <div class="text-center-w-full text-xs">
        Pas encore inscrit?
        <a href="{{route('client.create')}}" class="text-right w-full text-red-300 underline ">
             S'inscrire gratuitement.
        </a>
    </div>


</form>
