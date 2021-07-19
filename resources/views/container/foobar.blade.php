<div class="bg-gray-50 py-4 px-4">
    <div class="grid grid-cols-2 lg:grid-cols-3 mx-auto w-full xl:w-2/3">
        @foreach ($categories as $category)
            <div class="border-b mb-4 pb-4" style="break-inside: avoid;">
                <a href="{{ $category->slug }}" class="text-red-800 block text-sm hover:underline"> {{ $category->annonce_category_name }} </a>
                @foreach ($category->subCategories as $sub)
                    <a href="{{ $sub->slug }}" class="text-gray-500 block text-xs hover:underline"> {{ $sub->annonce_category_name }} </a>
                @endforeach
            </div>
        @endforeach
    </div>
</div>


<div class="bg-gray-800 text-white py-4 px-4">
    <div class="grid grid-cols-2 lg:grid-cols-3 mx-auto w-full xl:w-2/3">
        @foreach ($categories as $category)
            <div class="border-b mb-4 pb-4" style="break-inside: avoid;">
                <a href="{{ $category->slug }}" class="text-red-800 block text-sm hover:underline"> {{ $category->annonce_category_name }} </a>
                @foreach ($category->subCategories as $sub)
                    <a href="{{ $sub->slug }}" class="text-gray-500 block text-xs hover:underline"> {{ $sub->annonce_category_name }} </a>
                @endforeach
            </div>
        @endforeach
    </div>
</div>
