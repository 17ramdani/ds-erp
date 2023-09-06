<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Utility</h3>
                </div>

                <div class="">

                    <div class="rz-panel">
                        <x-alert />

                        <h4>Export &amp; Import</h4>

                        <div class="uk-child-width-1-2@s" uk-grid>
                            <div>
                                <div class="rz-card">
                                    <div class="rz-card-heading">
                                        <h5 class="uk-margin-remove"><span class="uk-margin-small-right" uk-icon="cloud-download"></span>Export</h5>
                                    </div>
                                    <ul>
                                        <li><a href="{{ route('tipe.export.index') }}">Data Tipe Kain</a></li>
                                        <li><a href="">Data Tipe Kain Harga</a></li>
                                        <li><a href="">Data Master Barang</a></li>
                                        <li><a href="">Data Lot</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <div class="rz-card">
                                    <div class="rz-card-heading">
                                        <h5 class="uk-margin-remove"><span class="uk-margin-small-right" uk-icon="cloud-upload"></span>Import</h5>
                                    </div>
                                    <ul>
                                        <li><a href="{{ route('tipe.import.index') }}">Data Tipe Kain</a></li>
                                        <li><a href="{{ route('elfinder.tinymce5') }}">Gambar Tipe Kain</a></li>
                                        <li><a href="{{ route('import-price.index') }}">Data Tipe Kain Harga</a></li>
                                        <li><a href="{{ route('tipe-acs.import.index') }}">Data Tipe Kain Accsesories</a></li>
                                        <li><a href="">Data Master Barang</a></li>
                                        <li><a href="">Data Lot</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="uk-margin-large-top uk-text-right">
                            <a href="" class="uk-button uk-button-primary uk-border-rounded">Save</a>
                        </div>
                    </div>
                </div>

            </div>




        </div>
    </main>
</x-app-layout>
