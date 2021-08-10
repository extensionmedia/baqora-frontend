<div class="w-full h-96 rounded-lg shadow overflow-hidden bg-gray-50">
    <div class="block h-full w-full bg-red-500 z-0">
        <img
            alt="Snowy mountain lake"
            class="screen object-cover min-w-full h-full z-0"
            src="/{{$annonce->default_image($annonce->annonce_UID)}}"
        />
    </div>
</div>
<div class="bg-gray-200 py-2 text-center flex justify-center gap-4 rounded-lg my-2 w-full overflow-auto">
    @foreach ($annonce->images()->get() as $img)
        <div class="rounded-lg overflow-hidden h-12 shadow border-2 @if($img->is_default) border-red-300 @endif hover:border-red-300 cursor-pointer">
            <img class="item h-12" src="/storage/{{$img->image_path}}">
        </div>
    @endforeach
</div>
<script>
    $(document).ready(function(){
        $('.item').on('click', function(){
            $('.item').parent().removeClass('border-red-300');
            $(this).parent().addClass('border-red-300');
            $('.screen').attr('src', $(this).attr('src'));
        });
    });
</script>
