@extends('container.app')
@section('title')
    Baqora : Vie Privé et Politique de Confidentialité
@endsection
@section('content')



    <div class="mx-auto w-full xl:w-2/3 px-4 lg:px-8">
        <div class="py-4">
            <a href="{{route('start')}}" class="bg-gray-100 rounded-lg hover:bg-gray-200 text-xs px-1 text-red-400"> Acceuil </a> <i class="text-xs fas fa-angle-right"></i>
            <a href="" class="bg-gray-100 rounded-lg hover:bg-gray-200 text-xs px-1 text-red-400"> Pages </a> <i class="text-xs fas fa-angle-right"></i>
            <span class="text-xs"> Conditions Générales d’Utilisation </span>
        </div>

        <h1 class="text-gray-600 text-2xl font-bold mt-8">
            Vie Privé et Politique de Confidentialité
        </h1>
    </div>
    <div class="mx-auto w-full xl:w-2/3 px-4 lg:px-8 mt-8 mb-12">
        <div class="w-full">
            <p class="text-sm my-4 bg-green-50">
                Si une annonce est refusée pour non respect du règlement, il sera proposé à l'annonceur de la modifier. Baqora.com se réserve le droit de juger de la conformité d'une annonce au règlement et à l'esprit du site. Le règlement est susceptible d'être modifié et peut être réactualisé en permanence.
            </p>

            <p class="text-sm my-4 font-bold">Doublons:</p>
            <p class="text-sm my-4">
                Il est interdit de publier plusieurs annonces pour un même article, service ou emploi. Supprimez l'ancienne annonce désactivée, patientez un délai de 7 jours puis publiez votre nouvelle annonce. De même, il est interdit de publier des annonces pour un même article, service ou emploi sous différentes catégories ou dans différentes régions.Si vous voulez remonter votre annonce en haut de la page, il suffit d'opter pour notre service Renouvellement.
            </p>

            <p class="text-sm my-4 font-bold">Marketing:</p>
            <p class="text-sm my-4">
            Seules sont autorisées les annonces de vente, location, emploi ou service. L'utilisation d'une annonce à des fins de marketing pur est interdite.
            </p>
            <p class="text-sm my-4 font-bold">Annonce de particulier:</p>
            <p class="text-sm my-4">
Les annonces catégorisées comme "Particulier" publiées sur Baqora.com sont réservées aux personnes non commerciales, autorisées à s'engager par contrat légal.
            </p>
            <p class="text-sm my-4 font-bold">Annonce de professionnel:</p>
            <p class="text-sm my-4">
Les annonces catégorisées comme "Professionnel" publiées sur Baqora.com sont réservées aux entreprises. Baqora.com se réserve le droit de juger du caractère professionnel d'une annonce.
            </p>
            <p class="text-sm my-4 font-bold">Services:</p>
            <p class="text-sm my-4">
Les services proposés ou recherchés doivent respecter les lois en vigueur au Maroc pour chaque profession.
            </p>
            <p class="text-sm my-4 font-bold">Titre de l'annonce:</p>
            <p class="text-sm my-4">
Le titre de l'annonce doit brièvement décrire l'article ou le service proposé. Il ne doit pas contenir des numéros de téléphones ou de termes tels que:<br>
- Urgent<br>
- Je vends, vente, à vendre, offre<br>
- Demande<br>
- Adresse web<br>
- Une date<br>
- Un nom d'entreprise<br>
- Une URL (adresse Web)<br>
- Un numéro de téléphone<br>
- Un lien ou un compte de réseaux sociaux<br>
Baqora.com se réserve le droit de modifier le titre de l'annonce pour qu'il soit conforme au réglement.<br>
Aucun caractère inutile n'est autorisé dans le titre<br>
            </p>
            <p class="text-sm my-4 font-bold">Texte de l'annonce:</p>
            <p class="text-sm my-4">
L'article ou le service doit être décrit dans le texte de l'annonce. Il est interdit de proposer simplement un lien vers une autre page. Le texte des annonces ne doit pas être copié sur une autre annonce : ces textes sont protégés par le droit d'auteur.
            </p>
            <p class="text-sm my-4 font-bold">Langue:</p>
            <p class="text-sm my-4">
Seules les annonces en Français sont autorisées.
            </p>
            <p class="text-sm my-4 font-bold">Catégories:</p>
            <p class="text-sm my-4">
L'annonce doit être placée dans la catégorie décrivant le mieux l'article ou le service. Le cas échéant, Baqora.com peut la déplacer dans la catégorie correspondante. Les biens et services n'appartenant pas à la même catégorie doivent être proposés dans des annonces séparées. Les annonces de vente doivent être classées sous "Offre", les annonces de recherche sous "Demande". "A louer" et "Demande de location" sont disponibles sous certaines catégories. Dans d'autres catégories, les annonces "A louer" doivent être classées sous "Offre (vous vendez un bien)", les annonces de demandes de location sous "Demande (vous recherchez un bien)".
            </p>
            <p class="text-sm my-4 font-bold">Nombre d'annonces actives gratuites par utilisateur:</p>
            <p class="text-sm my-4">
Le nombre d’annonces actives gratuites par utilisateur sur Baqora.com est limité selon le type d’utilisateurs.
Le tableau ci-dessous reprend le niveau de limitation pour les annonces gratuites par type de compte (Particulier/Professionnel/Boutique).
Il est possible pour tous les types de compte d'accéder à un niveau supérieurs d'annonces actives en procédant au paiement lorsque la limite d'annonces gratuites actives est atteinte.
            </p>

            <p class="text-sm my-4 font-bold">Liens:</p>
            <p class="text-sm my-4">
            Les liens inclus dans l'annonce doivent être directement liés à l'article ou au service proposé. Le règlement régissant les annonces s'applique également au lien. Il est interdit d'établir un lien vers un autre site d'annonces classées ou d'enchères.
            </p>
            <p class="text-sm my-4 font-bold">Photos:</p>
            <p class="text-sm my-4">
            La vente d'animaux sur Baqora.com doit se conformer à la législation en vigueur au Maroc.
            </p>
            <p class="text-sm my-4 font-bold">Biens piratés et contrefaçons:</p>
            <p class="text-sm my-4">
            Les annonces proposant des articles interdits à la vente de par la législation en vigueur au Maroc sont interdites.
            </p>
            <p class="text-sm my-4 font-bold">Règlement pour les animaux:</p>
            <p class="text-sm my-4">
            La vente d'animaux sur Baqora.com doit se conformer à la législation en vigueur en Maroc .
            </p>
            <p class="text-sm my-4 font-bold">
            Articles illégaux:
            </p>
            <p class="text-sm my-4">
            Les annonces proposant des articles interdits à la vente de par la législation en vigueur en Maroc sont interdites. Voici une liste d'exemples de produits illégaux.
            </p>
            <p class="text-sm my-4 font-bold">Contenu injurieux:</p>
            <p class="text-sm my-4">
            Les annonces ou photos pouvant être perçues comme une insulte envers des individus, des groupes ethniques ou des personnalités sont interdites.<br>

            Biens et services interdits: Baqora.com a établi des restrictions sur certains biens ou services susceptibles d'être proposés. Voici une liste de biens ou services non autorisés.
            </p>
            <p class="text-sm my-4 font-bold">Offres non réalistes:</p>
            <p class="text-sm my-4">
            Les offres non réalistes ne sont pas autorisées. Baqora.com se réserve le droit de juger de ce qui n'est pas réaliste.
            </p>
            <p class="text-sm my-4 font-bold">Utilisation d'un service de dépôt d'annonces:</p>
            <p class="text-sm my-4">
            L’utilisation d’un service de dépôt d’annonces, au titre duquel des personnes sont payées pour déposer de très grandes quantités d'annonces sur les sites Web, ne sont pas autorisés sur Baqora.com. Ces méthodes inondent le site de spams et rendent difficile la recherche d'autres contenus par les utilisateurs.
            </p>
            <p class="text-sm my-4 font-bold">Recevoir la newsletter Baqora.com et être informé de nos promotions et actualités:</p>
            <p class="text-sm my-4">
            En déposant une annonce ou en répondant à une annonce vous nous autorisez à vous envoyer des emails ou des sms pour vous informer et vous aider à mieux vendre et acheter sur Baqora.com. Vous disposez à tout moment du droit de vous désinscrire de ce service via les newsletters.
            </p>

        </div>
    </div>
@endsection
