<div class="modal_content w-11/12 md:w-2/3 rounded-lg border bg-white py-8 px-4 md:p-12 shadow mx-auto mt-12">
    <div class="w-full text-center text-red-300 text-3xl">
        BAQORA.ma {{Session::get('cookie_accepted')}}
    </div>
    <p class="text-xs leading-6 py-8">
        Pour baqora.ma, votre expérience sur notre site est une priorité. C'est pourquoi nous utilisons des cookies et autres traceurs pour vous fournir notre service, le personnaliser, en mesurer l’audience et améliorer votre expérience.<br>
Sur la base de votre consentement des informations liées à votre navigation sur notre site sont stockées ou lues sur votre terminal (telle que l’IP, les pages visitées etc.) par bagora.ma et ses partenaires ou sur la base de l'intérêt légitime de ses partenaires afin de diffuser des publicités personnalisées, mesurer leurs performances, obtenir des données d'audience en lien avec cette publicité et développer et améliorer les produits.<br>
En cliquant sur “Accepter”, vous consentez à l’utilisation de cookies pour l’ensemble des finalités ci-dessus. Vous pouvez également configurer vos choix finalité par finalité en cliquant sur “Personnaliser” ou refuser en cliquant sur "Continuer sans accepter". Vous pouvez changer d'avis ou vous opposer à l’utilisation des cookies à tout moment en cliquant sur « Vie privée / cookies » figurant en bas de chaque page.
    </p>
    <div class="flex gap-4">
        <div class="flex-1 text-right">
            <button class="cookie_accepted py-2 px-8 text-white font-bold text-xl rounded bg-green-400 hover:bg-green-600">Accepter </button>
        </div>
        <div class="flex-1">
            <button class="py-2 px-8 text-gray-600 font-bold text-xl rounded border hover:bg-gray-50">Refuser </button>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){

        $('.cookie_accepted').on('click', function(){
            $.ajax({
                url: "{{route('cookie.accepted')}}",
                success: function(r){
                    console.log(r);
                    $('.modal').remove();
                }
            });
        });

    });
</script>
