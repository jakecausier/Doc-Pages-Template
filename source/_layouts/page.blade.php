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
                    <div class="nav flex-column nav-pills" id="docs-navigation" role="tablist" aria-orientation="vertical">
                        @foreach ($docfiles as $key => $docnav)
                            <a class="nav-link @if ($docnav['navSlug'] === $page->navSlug) {{ 'active' }} @endif  @if ($docnav['topDivider'] == 'true') {{'mt-4'}} @endif" id="{{ $docnav['navSlug'] }}-tab" href="{{ "/page/" . $docnav['navOrder'] . "/" . $docnav['navSlug'] }}">{{ $docnav['navTitle'] }}</a>
                        @endforeach
                    </div>
                </div>

                <div id="content" class="tab-content col">

                    <h1 id="{{ $page->navSlug }}">{{ $page->pageTitle }}</h1>

                    @yield('content')

                    @component('dev.ipsum')
                    @endcomponent
                    @component('dev.ipsum')
                    @endcomponent
                    @component('dev.ipsum')
                    @endcomponent

                    <div id="{{ $page->navSlug . '-section2' }}">
                        <h2>Special Info</h2>

                        @component('dev.ipsum')
                        @endcomponent
                        @component('dev.ipsum')
                        @endcomponent
                    </div>

                </div>
            </div>
        </section>

        @component('partials.footer', ['page' => $page])
        @endcomponent

        <script src="/assets/js/main.js"></script>

    </body>
</html>
