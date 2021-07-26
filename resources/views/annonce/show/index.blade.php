@extends('container.app')
@section('content')
    <div class="mx-auto w-full xl:w-2/3 px-4 lg:px-8">
        @include('annonce.show.partials.breadcrumb')

        <div class="flex w-full gap-4">
            <div class="w-2/3">
                <div class="relative w-full h-96 rounded-lg shadow overflow-hidden bg-gray-50">
                    <div class="absolute top-0 block h-full w-full bg-red-500">
                        <img
                            alt="Snowy mountain lake"
                            class="object-cover min-w-full h-full"
                            src="https://statics.ganga.ma/ganga/annonces/cfd3e16735511bd244438e5bd75aae46/0-1626606945.jpg"
                        />
                    </div>
                </div>
            </div>
            <div class="w-1/3">
                <div class=" border rounded-lg shadow pt-3 pb-6 px-4">
                    <div class="border-b border-red-300 flex py-4 items-center gap-4">
                        <a href="" class="h-16 w-16 rounded-full overflow-hidden">
                            <img class="w-full" src="https://upload.wikimedia.org/wikipedia/commons/a/a0/Arh-avatar.jpg" alt="">
                        </a>
                        <a href="" class="flex-1 hover:underline">
                            Yassine
                        </a>
                        <a href=""><i class="fas fa-angle-right text-2xl text-red-300"></i></a>
                    </div>

                    <div class="mt-6 w-full">
                        <a href="" class="w-full bg-red-300 hover:bg-red-400 text-white text-center rounded mb-2 block py-4 text-sm">Envoyer un message</a>
                        <a href="" class="w-full border border-red-300 text-red-600 text-center rounded block py-4 text-sm hover:bg-red-50">Afficher Numéro Téléphone</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
