<div class="nav flex-column nav-pills" id="docs-navigation" role="tablist" aria-orientation="vertical">
    @foreach ($docfiles as $key => $docnav)
        <a class="nav-link @if ($docnav['navSlug'] === $page->navSlug) {{ 'active' }} @endif  @if ($docnav['topDivider'] == 'true') {{'mt-4'}} @endif" id="{{ $docnav['navSlug'] }}-tab" href="{{ "/page/" . $docnav['navOrder'] . "-" . $docnav['navSlug'] }}">{{ $docnav['navTitle'] }}</a>
    @endforeach
</div>
