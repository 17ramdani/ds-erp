<footer class="uk-margin-top uk-background-muted">
    <div class="uk-container">
        <hr>
        <div class="uk-align-right@m">
            <div class="uk-text-meta uk-margin">Dunia Sandang ERP ver 1.0 - &copy; {{ date('Y') }} All Rights
                Reserved</div>
        </div>
    </div>
</footer>

<!-- OFFCANVAS -->
<div id="offcanvas-nav" data-uk-offcanvas="flip: true; overlay: false">
    <div class="uk-offcanvas-bar uk-offcanvas-bar-animation uk-offcanvas-slide">
        <button class="uk-offcanvas-close uk-close uk-icon" type="button" data-uk-close></button>
        <ul uk-nav>
            @include('layouts.inc.menu')
        </ul>
    </div>
</div>
<!-- /OFFCANVAS -->
