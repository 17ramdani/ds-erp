<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Sales &amp; Marketing</h3>
                </div>

                <div class="uk-grid-medium" uk-grid>
                    <div class="uk-width-2-3@s">
                        <div class="rz-panel">

                            <h5>Input Merchant Point</h5>
                            <form class="uk-form-stacked" action="/add-merchant" method="POST"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="uk-margin">
                                    <label class="uk-form-label">Nama Merchant</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" name="nama_merchant" value="{{ old('nama_merchant') }}"
                                            type="text" placeholder="e.g Starbucks">
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label">Produk Merchant</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" type="text" name="produk_merchant"
                                            value="{{ old('produk_merchant') }}" placeholder="e.g E-Voucher 100rb">
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label">Point Ditukar</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" type="number" name="point_merchant"
                                            value="{{ old('point_merchant') }}" placeholder="e.g 100">
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label">Gambar</label>
                                    <div class="uk-form-controls">
                                        <div class="js-upload" uk-form-custom>
                                            {{-- <input type="file" multiple name="file_merchant"
                                                accept=".png,.jpeg,.jpg,.gif"> --}}
                                            <input type="file" id="inputgambar" name="file_merchant"
                                                accept=".png,.jpeg,.jpg,.gif">
                                            <button class="uk-button uk-button-default" type="button" tabindex="-1"
                                                id="pilih">Select</button>
                                        </div>
                                    </div>
                                    <div class="uk-margin-small"><img id="showgambar"
                                            src="{{ asset('/assets/img/voucher.jpeg') }}" class="uk-border-rounded"
                                            alt=""></div>
                                </div>
                                <div class="uk-margin-large-top"><button type="submit" class="uk-button uk-button-primary uk-border-rounded">Simpan</button></div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
    @push('script')
        <script type="text/javascript">
            var file = document.getElementById('inputgambar');
            file.addEventListener('change', function() {
                gambar(this);
            })

            function gambar(a) {
                if (a.files && a.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById('showgambar').src = e.target.result;
                    }
                    reader.readAsDataURL(a.files[0]);
                }
            }
        </script>
    @endpush
</x-app-layout>
