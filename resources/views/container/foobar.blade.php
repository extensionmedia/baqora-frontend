<div class="bg-gray-50 py-4 px-4">
    <div class="grid grid-cols-2 lg:grid-cols-3 mx-auto w-full xl:w-2/3">
        @foreach ($categories as $category)
            <div class="border-b mb-4 pb-4" style="break-inside: avoid;">
                <a href="{{ route('category.annonces', $category) }}" class="text-red-800 block text-sm hover:underline"> {{ $category->annonce_category_name }} </a>
                @foreach ($category->subCategories as $sub)
                    <a href="{{ route('category.annonces', $sub) }}" class="text-gray-500 block text-xs hover:underline"> {{ $sub->annonce_category_name }} </a>
                @endforeach
            </div>
        @endforeach
    </div>
</div>


<div class="bg-gray-800 text-white py-8 px-4">
    <div class="grid grid-cols-2 gap-4 lg:grid-cols-3 mx-auto w-full xl:w-2/3">
        <div class=" mb-4" style="break-inside: avoid;">
            <div class="border-b border-gray-700 pb-2 mb-2 text-gray-200 block text-sm uppercase"> à propos du baqora </div>
            <a href="" class="text-gray-500 block text-xs hover:underline py-1"> Qui sommes-nous? </a>
            <a href="{{route('pages.contact')}}" class="text-gray-500 block text-xs hover:underline py-1"> Nous rejoindre </a>
            <a href="" class="text-gray-500 block text-xs hover:underline py-1"> Nos differents projets </a>
        </div>

        <div class=" mb-4" style="break-inside: avoid;">
            <div class="border-b border-gray-700 pb-2 mb-2 text-gray-200 block text-sm uppercase"> informations légales </div>
            <a href="" class="text-gray-500 block text-xs hover:underline py-1"> Règles de diffusion, de référencement et de déréférencement </a>
            <a href="" class="text-gray-500 block text-xs hover:underline py-1"> Conditions générales de vente </a>
            <a href="" class="text-gray-500 block text-xs hover:underline py-1"> Vie privée / cookies </a>
            <a href="" class="text-gray-500 block text-xs hover:underline py-1"> Vos droits et obligations </a>
        </div>
        <div class=" mb-4" style="break-inside: avoid;">
            <div class="border-b border-gray-700 pb-2 mb-2 text-gray-200 block text-sm uppercase"> retrouvez-nous sur </div>
            <a href="" class="text-gray-500 block text-xs hover:underline py-1"> Facebook </a>
            <a href="" class="text-gray-500 block text-xs hover:underline py-1"> Twitter </a>
            <a href="" class="text-gray-500 block text-xs hover:underline py-1"> Instagram </a>
            <a href="" class="text-gray-500 block text-xs hover:underline py-1"> Youtube </a>
        </div>
    </div>
</div>
