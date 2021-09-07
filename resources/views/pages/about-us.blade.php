@extends('container.app')
@section('title')
    Baqora : A-Propos
@endsection
@section('content')



    <div class="mx-auto w-full xl:w-2/3 px-4 lg:px-8">
        <div class="py-4">
            <a href="{{route('start')}}" class="bg-gray-100 rounded-lg hover:bg-gray-200 text-xs px-1 text-red-400"> Acceuil </a> <i class="text-xs fas fa-angle-right"></i>
            <a href="" class="bg-gray-100 rounded-lg hover:bg-gray-200 text-xs px-1 text-red-400"> Pages </a> <i class="text-xs fas fa-angle-right"></i>
            <span class="text-xs"> About-Us </span>
        </div>

        <div class="w-full h-52 overflow-hidden rounded-b-lg">
          <img class="screen object-cover min-w-full h-full z-0" src="/storage/images/contact-office.jpg" alt="">
        </div>
        <h1 class="text-gray-600 text-2xl font-bold mt-8">
            A propos de baqora.com
        </h1>
    </div>
    <div class="mx-auto w-full xl:w-2/3 px-4 lg:px-8 mt-8 mb-12">
        <div class="w-full">
            <h2 class="text-gray-600 text-xl text-red-300">
                En bref
            </h2>
            <p class="text-sm my-4">
                Créé en 2020, baqora.ma est une plateforme d’échanges qui simplifie l’accès à la consommation, privilégie la relation locale et fait du digital un outil au service de tous.
            </p>
            <p class="text-sm my-4">
                baqora.ma se positionne comme un acteur numérique, économique, sociétal, innovant, avec toujours le même objectif : faciliter tous les échanges au quotidien de l’ensemble de nos utilisateurs.
                Nous donnons une seconde vie à des milliers de biens.
                Derrière cette apparente simplicité, se trouve une entreprise en forte croissance, où il fait bon travailler, une entreprise qui cultive une démarche RH responsable et collective.
            </p>

            <h2 class="text-gray-600 text-xl text-red-300">
                Nous travaillons pour vous aider
            </h2>
            <p class="text-sm my-4">
                Nous avons un nombre important de visiteurs uniques qui, chaque mois, consultent les 2354 annonces regroupés en 8 catégories (Immobilier, Vehicules, Maison et Jardins, Multimedia, Emploi, Loisirs, Vacances et Services) proposés par Baqora.com.
            </p>
        </div>
    </div>
@endsection
