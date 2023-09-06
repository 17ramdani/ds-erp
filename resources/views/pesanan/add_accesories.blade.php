<x-app-layout>
    <section id="navbarSecondary" class="uk-flex uk-flex-middle uk-flex-left">
        <div class="uk-width-1-1">
            <div class="uk-container">
                <h2 class="rz-text-pagetitle">Pesanan</h2>
            </div>

        </div>

    </section>
    <section class="uk-margin-medium">
        <div class="uk-container">
            <div class="rz-panel">
                <div class="uk-flex uk-flex-between">
                    <h3>Form Accesories</h3>
                </div>

                <div>
                    <form class="uk-form-stacked uk-position-relative">
                        <div class="uk-margin" id="barang-list">
                            <div id="kain1" class="uk-margin">
                                
                                <table class="uk-table uk-table-small uk-table-responsive uk-table-striped"
                                    id="table-barang">
                                    <thead>
                                        <tr>
                                            <th colspan="6"><h3 style="font-size: 18px !important">Data Pesanan</h3></th>
                                        </tr>
                                        <tr>
                                            <th>Barang</th>
                                            <th>L/GSM</th>
                                            <th>Kategori Watna</th>
                                            <th>Warna</th>
                                            <th>Satuan</th>
                                            <th>Qty</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pesanan['details'] as $detail)
                                        <tr>
                                            <td>{{ $detail['tipe_kain']['nama'] }}</td>
                                            <td>{{ $detail['tipe_kain']['gramasi']['nama'] }}</td>
                                            <td>{{ $detail['tipe_kain']['warna']['nama'] }}</td>
                                            <td>{{ $detail['warna_pesanan']['nama']}}</td>
                                            <td>{{ $detail['satuan']}}</td>
                                            <td>{{ $detail['qty'] }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <table class="uk-table uk-table-small uk-table-responsive uk-table-striped"
                                    id="table-barang">
                                    <thead>
                                        <tr>
                                            <th colspan="6"><h3 style="font-size: 18px !important">Accesories</h3></th>
                                        </tr>
                                        <tr>
                                            <th>Barang</th>
                                            <th>L/GSM</th>
                                            <th>Kategori Watna</th>
                                            <th>Warna</th>
                                            <th>Satuan</th>
                                            <th>Qty</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $no = 1;
                                        @endphp
                                        @foreach ($accesories['details'] as $asc)
                                        <tr>
                                            <td>{{ $asc['tipe_kain']['nama'] }}</td>
                                            <td>{{ $asc['tipe_kain']['gramasi']['nama'] }}</td>
                                            <td>{{ $asc['tipe_kain']['warna']['nama'] }}</td>
                                            <td>{{ $asc['warna_pesanan']['nama']}}</td>
                                            <td>{{ $asc['satuan']}}</td>
                                            <td><input type="number" id="qty-{{ $asc['id']}}" class="uk-input" placeholder="Qty" min="1" value="1"></td>
                                            <td><a onclick="storeAccesories({{ $asc['id']}})"><span uk-icon="cart"></span></a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>


                        <div class="uk-margin-medium-top uk-child-width-1-2@s" uk-grid>
                            <div>
                                {{-- <button type="button" id="button-submit" onclick="keranjangSubmit()"
                                    class="uk-button uk-border-rounded uk-button-primary uk-margin-small-right">
                                    <span id="loading-submit" uk-spinner="ratio: 0.6" hidden></span>Submit
                                </button> --}}
                                <button type="button" id="button-submit" onclick="keranjangSubmit()"
                                    class="uk-button uk-border-rounded uk-button-primary uk-margin-small-right">
                                    <span id="loading-submit" uk-spinner="ratio: 0.6" hidden></span>Submit
                                </button>
                                {{-- <a href="#modalCart" class="uk-visible@m uk-button uk-button-default uk-border-rounded"
                                    uk-toggle><span class="uk-margin-small-right" uk-icon="cart"></span>
                                    <small id="label_keranjang_count" class="uk-badge">0</small>
                                </a> --}}
                            </div>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </section>
    <div id="modalSubmitOrder" class="uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-text-center">

            <button class="uk-modal-close-default" type="button" uk-close></button>

            <p id="submit-message"></p>
            <div id="link-modalSubmitOrder"></div>
        </div>
    </div>
    @push('css')
        <link rel="stylesheet" href="{{ asset('plugins/datatable/datatable.uikit.min.css') }}">
    @endpush
    @push('js')
        <script src="{{ asset('plugins/datatable/dataTables.min.js') }}"></script>
        <script src="{{ asset('plugins/datatable/datatable.uikit.min.js') }}"></script>
    @endpush
    @include('pesanan.inc.modal-chart')
    @include('whitelist.inc.modal-whitelist')
    @push('script')
        <script>
            function storeAccesories(id){
                // alert(id)
                $.ajax({
                    type: "POST",
                    url: "{{ url('/store-asc') }}",
                    data: {
                        id:id,
                        qty: $('#qty-'+id).val(),
                    },
                    dataType: "json",
                    success: function(response) {
                        notif('success', response.pesan);
                        // console.log(response)
                    }
                });
            }

            function keranjangSubmit() {
                $("#button-submit").prop("disabled", true);
                $("#loading-submit").prop("hidden", false);
                
                $.ajax({
                    type: "POST",
                    url: "{{ url('/accesories') }}",
                    data: {
                        qty: $('#qty').val(),
                    },
                    dataType: "json",
                    cache: false,
                    timeout: 800000,
                    success: function(response) {
                            $('#submit-message').text(response.message)
                            let link = `<a href="pesanan" class="uk-button uk-button-primary">OK</a>`;
                            link = `<a class="uk-button uk-button-primary uk-modal-close">OK</a>`;
                            $('#link-modalSubmitOrder').html(link)
                            UIkit.modal('#modalSubmitOrder').show();
                            window.location.replace(response.redirectUrl);
                        $("#button-submit").prop("disabled", false);
                        $("#loading-submit").prop("hidden", true);
                    },
                    error: function(response) {
                        $.each(response.responseJSON.errors, function(key, value) {
                            notif("error", value);
                        });
                        if (response.status == 400) {
                            notif("error", response.responseJSON.message);
                        }
                        if (response.status == 500) {
                            notif("error", "Server error!.");
                        }
                        $("#button-submit").prop("disabled", false);
                        $("#loading-submit").prop("hidden", true);
                    }
                });
            }
        </script>
    @endpush
</x-app-layout>
