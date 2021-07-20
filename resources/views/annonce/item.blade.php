<div class="md:flex border rounded-lg mb-4 overflow-hidden cursor-pointer hover:shadow hover:border-red-200">
    <div class="w-full md:w-60 max-h-36 overflow-hidden relative">
        <img class="w-full" src="https://img.leboncoin.fr/api/v1/lbcpb1/images/eb/02/c9/eb02c939f58d9c54b86aa75e7b378175b97e5ada.jpg?rule=classified-760x460-webp">
        <div class="rounded-lg text-xs px-1 py-1 bg-red-100 bg-opacity-20 absolute top-0 m-2">
            <i class="fas fa-camera"></i> 5
        </div>
    </div>
    <div class="flex-1 py-3 px-4">
        <div class="flex flex-col justify-between h-full">
            <div class="">
                <div class="flex justify-between items-center mb-1">
                    <p class="text-lg">
                        Location estivale Banyuls sur mer
                    </p>
                    @if ($i == 3 OR $i == 0)
                    <div class="rounded border border-red-300 text-red-300 text-xs py-0 px-4">
                        PRO
                    </div>
                    @endif
                </div>
                <div class="text-xs text-red-300">
                    <p>
                        <i class="fas fa-tag"></i> 15 500 MAD
                    </p>
                </div>
            </div>
            <div class="">
                <div class="flex justify-between items-end">
                    <div class="text-xs text-gray-400">
                        <p class="">
                            Immobilier -> Maison
                        </p>
                        <p class="">
                            Tetouan : Safir
                        </p>
                        <p class="text-red-800 font-bold pt-2" style="font-size:10px">
                            <i class="far fa-clock"></i> Ajourd'hui : 12:23
                        </p>
                    </div>
                    <div class="flex gap-2 pb-2">
                        <button class="hover:text-red-300 hover:font-bold text-lg"><i class="far fa-heart"></i> <span class="text-xs text-gray-300"> 8 </span></button>
                        <button class="text-lg"><i class="far fa-eye"></i> <span class="text-xs text-gray-300"> 12 </span></button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
