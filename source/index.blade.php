@extends('_layouts.master')

@section('body')

    <section class="container">

        <div class="row">

            <div id="content-nav" class="d-none d-md-inline col-3 border-right border-primary">
                <div class="nav flex-column nav-pills" id="docs-navigation" role="tablist" aria-orientation="vertical">
                    @foreach ($docfiles as $key => $docnav)
                        <a class="nav-link @if ($docnav['topDivider'] == 'true') {{'mt-4'}} @endif" id="{{ $docnav['navSlug'] }}-tab" href="{{ "/page/" . $docnav['navOrder'] . "/" . $docnav['navSlug'] }}">{{ $docnav['navTitle'] }}</a>
                    @endforeach
                </div>
            </div>

            <div id="content" class="tab-content col">

                <h1>Welcome to the docs!</h1>
                <h2>Browse a topic to the left. This is just placeholder text</h2>

            </div>

    </section>
@endsection
