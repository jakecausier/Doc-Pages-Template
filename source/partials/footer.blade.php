
<footer>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <ul class="navigation">
                    @component('unique.nav-items', ['page' => $page])
                    @endcomponent
                </ul>
            </div>
            <div class="col-12 col-md-4">
                <div class="d-flex justify-content-center align-items-end">
                    <a href="https://github.com/jakecausier/Doc-Pages-Template" title="Made using Doc Pages Template" alt="GitHub">
                        <svg class="feather icon">
                            <use xlink:href="/assets/feather-sprite.svg#github"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-4">
            </div>
        </div>
    </div>
</footer>
