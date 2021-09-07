@extends('container.app')
@section('title')
    Baqora : Contactez Nous
@endsection
@section('content')
    <div class="mx-auto w-full xl:w-2/3 px-4 lg:px-8">
        <div class="py-4">
            <a href="{{route('start')}}" class="bg-gray-100 rounded-lg hover:bg-gray-200 text-xs px-1 text-red-400"> Acceuil </a> <i class="text-xs fas fa-angle-right"></i>
            <a href="" class="bg-gray-100 rounded-lg hover:bg-gray-200 text-xs px-1 text-red-400"> Pages </a> <i class="text-xs fas fa-angle-right"></i>
            <span class="text-xs"> contact-Us </span>
        </div>
        <div class="w-full h-52 overflow-hidden rounded-b-lg">
          <img class="screen object-cover min-w-full h-full z-0" src="/storage/images/contact-office.jpg" alt="">
        </div>
        <h1 class="text-gray-600 text-2xl font-bold mt-8">
            Contactez Nous
        </h1>
    </div>
    <div class="mx-auto w-full xl:w-2/3 px-4 lg:px-8 mt-8 mb-12">
        <div class="md:flex">
            <div class="w-full md:w-1/3 md:border-r md:pr-4">
                <h2 class="text-gray-600 text-xl text-red-300">
                    A-Propos
                </h2>
                <p class="text-sm my-4">
                    Créé en 2020, baqora.ma est une plateforme d’échanges qui simplifie l’accès à la consommation, privilégie la relation locale et fait du digital un outil au service de tous.
                </p>
                <p class="text-sm my-4">
                    baqora.ma se positionne comme un acteur numérique, économique, sociétal, innovant, avec toujours le même objectif : faciliter tous les échanges au quotidien de l’ensemble de nos utilisateurs.
                    Nous donnons une seconde vie à des milliers de biens.
                    Derrière cette apparente simplicité, se trouve une entreprise en forte croissance, où il fait bon travailler, une entreprise qui cultive une démarche RH responsable et collective.
                </p>
            </div>
            <div class="w-full md:w-2/3 md:pl-4">
                <h2 class="text-gray-600 text-xl mb-4 text-red-300">
                    Formulaire
                </h2>
                <div class="mb-4">
                    <label for="name" class="block text-sm text-gray-600">Votre Nom</label>
                    <input class="p-2 border rounded w-full" type="text" name="name" id="name" placeholder="Votre Nom...">
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-sm text-gray-600">Votre Email</label>
                    <input class="p-2 border rounded w-full" type="text" name="email" id="email" placeholder="exemple@email.com">
                </div>

                <div class="mb-4">
                    <label for="message" class="block text-sm text-gray-600">Votre Message</label>
                    <textarea class="p-2 border rounded w-full max-w-full h-32" type="text" name="message" id="message" placeholder="Votre Message"></textarea>
                </div>

                <button class="px-8 py-2 bg-red-300 text-white rounded border-red-500 hover:bg-red-400">Envoyer Mon Message</button>
            </div>
        </div>
    </div>
@endsection
