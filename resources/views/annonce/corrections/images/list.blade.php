@extends('container.app')
@section('content')
    <div class="w-full">
        <div class="w-1/3 text-xs mx-auto border">
            <div class="flex justify-end py-2 gap-4">
                <button class="start bg-green-500 py-1 px-2 text-white">start</button>
                <button class="stop bg-red-500 py-1 px-2 text-white">stop</button>
            </div>
            @foreach ($annonces as $a)
                @if (!$a->images()->count())
                    <div class="flex items-center h-12 gap-4 border-b">
                        <div class="">
                            {{$a["id"]}}
                        </div>
                        <div class="flex-1">
                            {{$a["titre"]}}
                        </div>
                        <div class="image_counter">
                            {{  $a->images()->count()  }}
                        </div>
                        <button class="go bg-red-500 rounded text-white py-1 px-2" data-id="{{$a["id"]}}" data-uid="{{$a["annonce_UID"]}}">go!</button>
                    </div>
                @endif

            @endforeach
        </div>
    </div>


<script>
    $(document).ready(function(){
        var isworking = false;
        var timer;

        $('.start').on('click', function(){
            timer = setTimeout(() => {
                if(!isworking){
                    $('.go').each(function(){
                        if(!$(this).hasClass('done')){
                            $(this).trigger('click');
                            return false;
                        }
                    });
                }
            }, 500);
        });

        $('.stop').on('click', function(){
            clearInterval(timer);
        });

        $('.go').on('click', function(){
            var uid = $(this).data("uid");
            isworking = true;
            var that = $(this);
            that.html('doing');
            $.ajax({
                url: "{{route('imagesToJson')}}",
                data: {uid: uid},
                success: function(r){
                    console.log(r);
                    that.parent().remove();
                    isworking = false;
                    $('.start').trigger('click');
                }
            });
        });
    });
</script>


@endsection


