@extends('container.app')
@section('content')

<div class="mx-auto w-full xl:w-2/3 px-4 lg:px-8">
    <div class="py-4">
        <a href="{{route('start')}}" class="bg-gray-100 rounded-lg hover:bg-gray-200 text-xs px-1 text-red-400"> Acceuil </a> <i class="text-xs fas fa-angle-right"></i>
        <a href="" class="bg-gray-100 rounded-lg hover:bg-gray-200 text-xs px-1 text-red-400"> Pages </a> <i class="text-xs fas fa-angle-right"></i>
        <span class="text-xs"> About-Us </span>
    </div>
</div>
<div class="mx-auto w-full xl:w-2/3 px-4 lg:px-8 mt-8 mb-12">
    <div class="w-full">
        @foreach ($annonces as $annonce)
            @include('annonce.item')
        @endforeach
        <div class="w-full py-2">
            {{ $annonces->links() }}
        </div>
    </div>
</div>
@endsection