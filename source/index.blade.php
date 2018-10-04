@extends('_layouts.master')

@section('body')

    <section class="container">

        <div class="row">

            <div id="content-nav" class="d-none d-md-inline col-3 border-right border-primary">
                @component('partials.nav-side', ['page' => $page, 'docfiles' => $docfiles])
                @endcomponent
            </div>

            <div id="content" class="tab-content col">

                <h1>Welcome to the docs!</h1>
                <h2>Browse a topic to the left. This is just placeholder text</h2>

            </div>

    </section>
@endsection
