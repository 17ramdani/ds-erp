<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Purchasing</h3>
                </div>

                <div class="rz-dashboard">

                    <div class="uk-margin-medium">
                        <form class="uk-child-width-1-5@m uk-child-width-1-2@s uk-form-stacked uk-grid-small" uk-grid
                            action="{{ route('tipe-price.index') }}">
                            <div>
                                <select class="uk-select" name="jenis_kain_id" id="jenisKain">
                                    <option value="">Pilih Jenis Kain</option>
                                    @foreach ($jenis as $j)
                                    <option value="{{ $j->id }}"
                                        {{ $j->id == request('jenis_kain_id') ? 'selected' : '' }}>
                                        {{ $j->nama }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <select class="uk-select" name="tipe_kain" id="tipeKain"
                                    data-url="{{ route('get-tipe-kain') }}">
                                    <option value="">Pilih Tipe Kain</option>
                                </select>
                            </div>
                            <div>
                                <select class="uk-select" name="kategori_warna_id">
                                    <option value="">Pilih Kategori Warna</option>
                                    @foreach ($warna->where('parent_id', 0) as $w)
                                    <option value="{{ $w->id }}"
                                        {{ $w->id == request('kategori_warna_id') ? 'selected' : '' }}>
                                        {{ $w->nama }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <select class="uk-select" name="customer_category_id">
                                    <option value="">Pilih Kategori Customer</option>
                                    @foreach ($customer as $cc)
                                    <option value="{{ $cc->id }}"
                                        {{ $cc->id == request('customer_category_id') ? 'selected' : '' }}>
                                        {{ $cc->nama }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <input class="uk-input" type="month" name="periode" value="{{ request('periode') }}">
                            </div>

                            <div class="uk-flex uk-flex-bottom">
                                <button type="submit"
                                    class="uk-button uk-button-default uk-border-rounded">Tampilkan</button>
                            </div>
                        </form>
                    </div>

                    <div class="rz-panel">
                        <x-alert />

                        <div class="uk-flex uk-flex-between">
                            <div>
                                <h4>List Tipe Kain Price</h4>
                            </div>
                        </div>
                        <div class="uk-margin uk-overflow-auto">
                            <div class="uk-margin-medium">
                                <table class="uk-table uk-table-small uk-table-divider uk-text-small" id="tabel-so">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Jenis</th>
                                            <th>Tipe</th>
                                            <th>Kat Warna</th>
                                            <th>Kat Customer</th>
                                            <th>Harga Roll</th>
                                            <th>Harga Ecer</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($tipePrices->isEmpty())
                                            <tr>
                                                <td colspan="8">Tidak ada data yang cocok dengan pencarian</td>
                                            </tr>
                                        @else
                                            <form action="{{ route('tipe-price.store') }}" method="POST">
                                                @csrf
                                                @php
                                                    $groupedTipePrices = $tipePrices->groupBy('tipe_kain_id');
                                                @endphp
                                                @foreach ($groupedTipePrices as $tipeKainId => $groupedTipePrice)
                                                    @php
                                                        $tipeRoll = $groupedTipePrice->where('tipe', 'ROLL')->first();
                                                        $tipeEcer = $groupedTipePrice->where('tipe', 'ECER')->first();
                                                    @endphp

                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>
                                                            @if ($tipeRoll)
                                                                {{ $tipeRoll->tipeKain->jenis->nama }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($tipeRoll)
                                                                {{ $tipeRoll->tipeKain->nama }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($tipeRoll)
                                                                {{ $tipeRoll->tipeKain->kategori_warna->nama }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($tipeRoll)
                                                                {{ $tipeRoll->customerCategory->nama }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($tipeRoll)
                                                                <input class="uk-input" type="number" name="harga_roll" value="{{ $tipeRoll->harga }}">
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($tipeEcer)
                                                                <input class="uk-input" type="number" name="harga_ecer" value="{{ $tipeEcer->harga }}">
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                <tr>
                                                    <td colspan="7"></td>
                                                    <td>
                                                        <button type="submit" class="uk-button uk-button-small uk-button-primary" disabled>Save</button>
                                                    </td>
                                                </tr>
                                            </form>
                                        @endif
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    @push('css')
    <link rel="stylesheet" href="{{ asset('plugins/datatable/datatable.uikit.min.css') }}">
    @endpush
    @push('js')
    <script src="{{ asset('plugins/datatable/dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatable/datatable.uikit.min.js') }}"></script>
    @endpush
    @push('script')
    <script>
        $(document).ready(function () {
            var dt = $('#table-so').DataTable({
                ordering: false,
                info: false,
                lengthChange: false,
                dom: '<"top">rt<"bottom"p><"clear">',
            });

            $('#button-cari').on('keyup click', function () {
                dt.search($('#cari').val()).draw();
            });
        });

    </script>
    <script>
        function getTipeKain(jenisKainId) {
            var url = $('#tipeKain').data('url') + '?jenis_kain_id=' + jenisKainId;
            $.ajax({
                url: url,
                type: 'GET',
                success: function (data) {
                    $('#tipeKain').empty();

                    $('#tipeKain').append('<option value="">Pilih Tipe Kain</option>');
                    data.forEach(function (tipe) {
                        $('#tipeKain').append('<option value="' + tipe.nama + '">' + tipe.nama +
                            '</option>');
                    });
                }
            });
        }

        $('#jenisKain').on('change', function () {
            var jenisKainId = $(this).val();
            getTipeKain(jenisKainId);
        });

        var initialJenisKainId = $('#jenisKain').val();
        if (initialJenisKainId) {
            getTipeKain(initialJenisKainId);
        }

    </script>
    @endpush

</x-app-layout>
