<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
    @include('container.partials.favicon')
    @if (env('APP_ENV')=='production')
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-JW7HZE4FEL"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-JW7HZE4FEL');
        </script>
    @endif

    @if (env('APP_ENV')=='production')
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6225075215500279" crossorigin="anonymous"></script>
    @endif
</head>
<body>

    @if (!Session::get('cookie_accepted'))
        @include('modals.modal',['content'=>'modals.cookies', 'type'=>1])
    @endif



    @include('container.topbar')
    <div class="pt-16">
        @yield('content')
    </div>

    {{-- Drow the foobar with categories and pages --}}
    {{foo()}}
<script>
    $(document).ready(function(){
        $('.wait').each(function(){
            var s = $(this).data('s');
            var that = $(this);
            var timer = setTimeout(function(){
                that.removeClass('hidden')
                that.find('.modal_content').addClass('animate__animated animate__fadeInDown');
            }, s);
        });
        $(document).on('click', '.modal_close', function(e){
            if(e.target == this){
                var that = $(this);
                $('.modal_content').addClass('animate__animated animate__fadeOutUp')
                $('.modal_content').one("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd", function(){
                    that.remove();
                });
            }
        });
    })
</script>
</body>
</html>
