<div class="fixed top-0 shadow flex items-center h-16 shadow bg-white w-full">
    <div class="flex items-center justify-between mx-auto w-full xl:w-2/3 px-4 lg:px-8 ">
        <div class="flex items-center gap-6">
            <a href="{{route('start')}}" class="flex items-center gap-1">
                <img class="h-8" src="{{ asset('storage/images/baqora-logo.png') }}" alt="">
                <div class="text-black font-bold text-xl tracking-wide">Baqora</div>
            </a>
            <a href="#" class="py-2 px-3 rounded-lg bg-red-300 bordered border-red-400 cursor-pointer hover:text-white hover:bg-red-400">
                <i class="far fa-plus-square"></i>
                <span class="hidden lg:inline-block">
                    Ajouter Une Annonce
                </span>
            </a>
        </div>
        <div class="flex gap-6 relative">
            <div class="text-2xl cursor-pointer hover:text-red-300">
                <i class="fas fa-search"></i>
            </div>
            <div class="text-2xl cursor-pointer hover:text-red-300">
                <i class="far fa-bell"></i>
            </div>
            <a href="{{route('favorite')}}" class="text-2xl cursor-pointer hover:text-red-300">
                <i class="far fa-heart"></i>
            </a>
            <div class="text-2xl cursor-pointer hover:text-red-300">
                <i class="far fa-user"></i>
            </div>
            <div class="absolute top-0 mt-12 -ml-32 w-64 h-full border rounded bg-white border-red-50">
                notes
            </div>
        </div>
    </div>
</div>
