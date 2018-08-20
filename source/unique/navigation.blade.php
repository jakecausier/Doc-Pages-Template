<div id="navigation-header">
    <nav id="navigation-top" class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary" aria-label="Site Navigation">
        <div class="collapse navbar-collapse" id="navbarHide">
            <ul class="navbar-nav ml-auto mr-auto">
                @component('unique.nav-items', ['page' => $page])
                @endcomponent
            </ul>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHide" aria-controls="navbarHide" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <div class="container logo-container">
        <a href="/"><img src="/assets/unique/purplecommerce.png" title="PurpleCommerce" alt="PurpleCommerce" class="logo"></a>
    </div>
</div>
