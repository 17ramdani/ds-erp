<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Purchasing</h3>
                </div>

                <div class="">

                    <div class="rz-panel">
                        <h4>Master Salesman</h4>
                        <div class="uk-child-width-1-4@m uk-child-width-1-2" uk-grid>
                            <div>
                                <a href="{{ route('salesman.index') }}" class="rz-panel-alt">
                                    <div class="rz-panel-subtext">List</div>
                                    <div class="rz-panel-CTA"><i class="ph-lg ph-caret-circle-right-light"></i></div>
                                </a>
                            </div>
                            <div>
                                <a href="{{ route('salescom.index') }}" class="rz-panel-alt">
                                    <div class="rz-panel-subtext">Commision</div>
                                    <div class="rz-panel-CTA"><i class="ph-lg ph-caret-circle-right-light"></i></div>
                                </a>
                            </div>
                            <div>
                                <a href="{{ route('salesvisit.index') }}" class="rz-panel-alt">
                                    <div class="rz-panel-subtext">Visit</div>
                                    <div class="rz-panel-CTA"><i class="ph-lg ph-caret-circle-right-light"></i></div>
                                </a>
                            </div>
                            <div>
                                <a href="{{ route('salesprospect.index') }}" class="rz-panel-alt">
                                    <div class="rz-panel-subtext">Prospect</div>
                                    <div class="rz-panel-CTA"><i class="ph-lg ph-caret-circle-right-light"></i></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>




        </div>
    </main>
</x-app-layout>
