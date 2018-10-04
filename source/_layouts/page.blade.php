<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="/assets/css/main.css">
    </head>
    <body>

        @component('unique.navigation', ['page' => $page])
        @endcomponent

        <section class="container">
            <div class="row">
                <div id="content-nav" class="d-none d-md-inline col-3 border-right border-primary">
                    @component('partials.nav-side', ['page' => $page, 'docfiles' => $docfiles])
                    @endcomponent
                </div>

                <div id="content" class="tab-content col">

                    <h1 class="mb-4" id="{{ $page->navSlug }}">{{ $page->pageTitle }}</h1>

                    @yield('content')

                </div>
            </div>
        </section>

        @component('partials.footer', ['page' => $page])
        @endcomponent

        <script src="/assets/js/main.js"></script>

    </body>
</html>
