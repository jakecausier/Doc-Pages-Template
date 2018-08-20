@extends('_layouts.master')

@section('body')

    <section class="container">

        <div class="row">

            <div id="content-nav" class="d-none d-md-inline col-3 border-right border-primary">
                <div class="nav flex-column nav-pills" id="docs-navigation" role="tablist" aria-orientation="vertical">

                    @foreach ($docfiles as $key => $docnav)

                        <a class="nav-link @php if ($docnav['startActive'] == 'true') echo 'active'; @endphp @php if ($docnav['topDivider'] == 'true') echo 'mt-4'; @endphp" id="{{ $docnav['navSlug'] }}-tab" data-toggle="tab" href="#{{ $docnav['navSlug'] }}" role="tab" aria-controls="{{ $docnav['navSlug'] }}" aria-selected="true">{{ $docnav['navTitle'] }}</a>

                    @endforeach


                </div>
            </div>

            <div id="content" class="tab-content col">

                @foreach ($docfiles as $key => $docpage)
                    <div class="tab-pane fade @php if ($docpage['startActive'] == 'true') echo 'show active'; @endphp"
                        id="{{ $docpage['navSlug'] }}" role="tabpanel" aria-labelledby="{{ $docpage['navSlug'] }}-tab">

                        <h1>{{ $docpage['pageTitle'] }}</h1>
                        {!! $docpage->getContent() !!}

                        @component('dev.ipsum')
                        @endcomponent
                    </div>


                @endforeach

            </div>

    </section>
@endsection
