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
                            action="{{ route('tipe.index') }}">
                            <div>
                                <select class="uk-select" name="jenis_kain_id">
                                    <option value="">Pilih Jenis Kain</option>
                                    @foreach ($jenis as $j)
                                        <option value="{{ $j->id }}"
                                            {{ old('jenis_kain_id') == $j->id ? 'selected' : '' }}>
                                            {{ $j->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <select class="uk-select" name="tipe_kain">
                                    <option value="">Pilih Tipe Kain</option>
                                    @foreach ($tipe->unique('nama')->sortBy('nama') as $t)
                                        <option value="{{ $t->nama }}" {{ old('tipe_kain') == $t->nama ? 'selected' : '' }}>
                                            {{ $t->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <select class="uk-select" name="kategori_warna_id">
                                    <option value="">Pilih Kategori Warna</option>
                                    @foreach ($warna->where('parent_id', 0) as $w)
                                        <option value="{{ $w->id }}"
                                            {{ old('kategori_warna_id') == $w->id ? 'selected' : '' }}>
                                            {{ $w->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <select class="uk-select" name="warna_id">
                                    <option value="">Pilih Warna</option>
                                    @foreach ($warna->where('parent_id', '!=', 0) as $w)
                                        <option value="{{ $w->id }}"
                                            {{ old('warna_id') == $w->id ? 'selected' : '' }}>{{ $w->nama }}
                                        </option>
                                    @endforeach
                                </select>
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
                                <h4>List Tipe Kain</h4>
                            </div>
                            <div>
                                <a href="{{ route('tipe.add') }}"
                                    class="uk-button uk-button-default uk-button-small uk-border-rounded">Add</a>
                            </div>
                        </div>
                        <div class="uk-child-width-1-4@m uk-child-width-1-2 uk-grid-small uk-margin" uk-grid>
                            <div>
                                <a href="" class="rz-panel-filter">
                                    <div class="uk-flex uk-flex-between">
                                        <div>Cotton Single Knit</div>
                                        <span class="uk-text-bold">{{ $cotton }}</span>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="" class="rz-panel-filter">
                                    <div class="uk-flex uk-flex-between">
                                        <div>Misty Single Knit</div>
                                        <span class="uk-text-bold">{{ $misty }}</span>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="" class="rz-panel-filter">
                                    <div class="uk-flex uk-flex-between">
                                        <div>Lacoste</div>
                                        <span class="uk-text-bold">{{ $lacoste }}</span>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="" class="rz-panel-filter">
                                    <div class="uk-flex uk-flex-between">
                                        <div>Fleece</div>
                                        <span class="uk-text-bold">{{ $fleece }}</span>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="" class="rz-panel-filter">
                                    <div class="uk-flex uk-flex-between">
                                        <div>Baby Terry</div>
                                        <span class="uk-text-bold">{{ $babyterry }}</span>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="" class="rz-panel-filter">
                                    <div class="uk-flex uk-flex-between">
                                        <div>Dry Fit</div>
                                        <span class="uk-text-bold">{{ $dryfit }}</span>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="" class="rz-panel-filter">
                                    <div class="uk-flex uk-flex-between">
                                        <div>Polyster</div>
                                        <span class="uk-text-bold">{{ $polyster }}</span>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="" class="rz-panel-filter">
                                    <div class="uk-flex uk-flex-between">
                                        <div>Merino</div>
                                        <span class="uk-text-bold">{{ $merino }}</span>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="" class="rz-panel-filter">
                                    <div class="uk-flex uk-flex-between">
                                        <div>Woven</div>
                                        <span class="uk-text-bold">{{ $woven }}</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="uk-margin-medium">
                            <div class="uk-grid-small" uk-grid>
                                <div class="uk-width-expand">
                                    <input type="text" class="uk-input" id="cari" placeholder="A.SK CARDED 24S">
                                </div>
                                <div class="uk-width-auto">
                                    <button type="button" id="button-cari"
                                        class="uk-button uk-button-primary uk-border-rounded">Search</button>
                                </div>
                            </div>
                        </div>
                        <div class="uk-margin uk-overflow-auto">
                            <table class="uk-table uk-table-small uk-text-small uk-table-responsive" id="table-so"
                                style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tipe Kain</th>
                                        <th>Jenis Kain</th>
                                        <th>Kat. Warna</th>
                                        <th>Warna</th>
                                        <th>Harga Roll</th>
                                        <th>Harga Ecer</th>
                                        <th>Gambar</th>
                                        <th class="uk-table-expand">Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @foreach ($datatable as $row)
        <div id="gambarKain{{ $row->id }}" class="uk-modal" uk-modal>
            <div class="uk-modal-dialog uk-modal-body">
                <button class="uk-modal-close-default" type="button" uk-close></button>
                <img src="{{ $row->gambar }}" alt="Gambar Tipe" id="modalImage{{ $row->id }}">
            </div>
        </div>
    @endforeach



    @push('css')
        <link rel="stylesheet" href="{{ asset('plugins/datatable/datatable.uikit.min.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    @endpush
    @push('js')
        <script src="{{ asset('plugins/datatable/dataTables.min.js') }}"></script>
        <script src="{{ asset('plugins/datatable/datatable.uikit.min.js') }}"></script>
    @endpush
    @push('script')
        <script>
            $(document).ready(function() {
                var table = $('#table-so').DataTable({
                    ordering: true,
                    info: false,
                    lengthChange: false,
                    dom: '<"top">rt<"bottom"p><"clear">',
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: '{{ route('tipe.index') }}',
                        data: function(d) {
                            d.jenis_kain_id = $('select[name="jenis_kain_id"]').val();
                            d.tipe_kain = $('select[name="tipe_kain"]').val();
                            d.kategori_warna_id = $('select[name="kategori_warna_id"]').val();
                            d.warna_id = $('select[name="warna_id"]').val();
                            d.query = $('#cari').val();
                        }
                    },
                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex',
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'nama',
                            name: 'nama'
                        },
                        {
                            data: 'jenis_kain',
                            name: 'jenis_kain.nama'
                        },
                        {
                            data: 'kategori_warna',
                            name: 'kategori_warna.nama'
                        },
                        {
                            data: 'warna',
                            name: 'warna.nama'
                        },
                        {
                            data: 'gramasi',
                            name: 'gramasi.nama'
                        },
                        {
                            data: 'lebar',
                            name: 'lebar.keterangan'
                        },
                        {
                            data: 'gambar',
                            name: 'gambar',
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: true,
                            searchable: true
                        }
                    ]
                });

                $('form').on('submit', function(e) {
                    e.preventDefault();
                    table.ajax.reload();
                });
                $('#button-cari').on('click', function() {
                    table.ajax.reload();
                });

                $(document).on('click', '.btn-modal', function() {
                    var imageSrc = $(this).data('image');
                    var modalId = $(this).attr('href');
                    $(modalId).find('img').attr('src', imageSrc);
                    UIkit.modal(modalId).show();
                });

            });
        </script>
    @endpush
</x-app-layout>
