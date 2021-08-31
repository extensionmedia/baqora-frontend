@isset($content)
    @if ($type == 1)
        <div class="modal bg-black bg-opacity-30 fixed top-0 right-0 bottom-0 z-50 w-full hidden wait" data-s="2000">
    @else
        <div class="modal bg-black bg-opacity-20 fixed top-0 right-0 bottom-0 z-50 w-full modal_close">
    @endif
            @include($content)
        </div>
@endisset
