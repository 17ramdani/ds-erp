<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Sales &amp; Marketing</h3>
                </div>

                <div class="rz-dashboard">
                    <x-alert />
                    <div class="rz-panel uk-margin-bottom">

                        <div class="uk-flex uk-flex-between">
                            <div>
                                <h4>Sales Order</h4>
                            </div>
                            <div>
                                <a href="{{ route('order.add') }}"
                                    class="uk-button uk-button-default uk-button-small uk-border-rounded">Add</a>
                            </div>
                        </div>
                        <div id="salesOrderPanel"
                            class="rz-panel-buttonset uk-child-width-1-6@m uk-child-width-1-3 uk-grid-small uk-margin"
                            uk-grid>
                            <div>
                                <a href="" class="uk-active">
                                    <dl class="uk-margin-top">
                                        <dt>Total SO</dt>
                                        <dd>{{ $pesanan_count->total_so }}</dd>
                                    </dl>
                                </a>
                            </div>
                            <div>
                                <a href="{{ route('order.tipe.index', 'Draft') }}">
                                    <dl class="uk-margin-top">
                                        <dt>Draft</dt>
                                        <dd>{{ $pesanan_count->draft }}</dd>
                                    </dl>
                                </a>
                            </div>
                            <div>
                                <a href="{{ route('order.tipe.index', 'Approved') }}">
                                    <dl class="uk-margin-top">
                                        <dt>Approved</dt>
                                        <dd>{{ $pesanan_count->approve }}</dd>
                                    </dl>
                                </a>
                            </div>
                            <div>
                                <a href="{{ route('order.tipe.index', 'Invoicing') }}">
                                    <dl class="uk-margin-top">
                                        <dt>Invoicing</dt>
                                        <dd>{{ $pesanan_count->invoicing }}</dd>
                                    </dl>
                                </a>
                            </div>
                            <div>
                                <a href="{{ route('order.tipe.index', 'Delivery') }}">
                                    <dl class="uk-margin-top">
                                        <dt>Delivery</dt>
                                        <dd>{{ $pesanan_count->dilevery }}</dd>
                                    </dl>
                                </a>
                            </div>
                            <div>
                                <a href="{{ route('order.tipe.index', 'Done') }}">
                                    <dl class="uk-margin-top">
                                        <dt>Done</dt>
                                        <dd>{{ $pesanan_count->done }}</dd>
                                    </dl>
                                </a>
                            </div>
                        </div>
                        <div>
                            <form method="GET" action="{{ route('order.index') }}"
                                class="uk-child-width-1-3@m uk-child-width-1-2@ uk-form-stacked" uk-grid>
                                <div>
                                    <label class="uk-form-label">Tanggal Mulai</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" name="tanggal_mulai" type="date"
                                            value="{{ $tglm }}" placeholder="Some text...">
                                    </div>
                                </div>
                                <div>
                                    <label class="uk-form-label">Tanggal Akhir</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" name="tanggal_akhir" type="date"
                                            value="{{ $tgla }}" placeholder="Some text...">
                                    </div>
                                </div>
                                <div class="uk-flex uk-flex-bottom">
                                    <button type="submit"
                                        class="uk-button uk-button-default uk-border-rounded">Tampilkan</button>
                                </div>
                            </form>
                        </div>
                        <div class="uk-margin-medium">
                            <div class="uk-grid-small" uk-grid>
                                <div class="uk-width-expand">
                                    <input type="text" class="uk-input" id="cari"
                                        placeholder="Search by PO Number">
                                </div>
                                <div class="uk-width-auto">
                                    <button type="button" id="button-cari"
                                        class="uk-button uk-button-primary uk-border-rounded">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="rz-panel">

                        <div class="uk-margin uk-overflow-auto">
                            <table class="uk-table uk-table-small uk-table-divider uk-text-small" id="table-so"
                                style="text-overflow: ellipsis;white-space: nowrap;overflow: hidden;">
                                <thead>
                                    <tr>
                                        <th>No SO</th>
                                        <th>Cust</th>
                                        <th>Jenis Cust</th>
                                        <th>Total Item</th>
                                        <th>Total Harga</th>
                                        <th>Status SO</th>
                                        <th>Tanggal SO</th>
                                        <th>Target Pesanan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pesanans as $i => $item)
                                        @php
                                            $total_item = count($item['details']);
                                            $total_qty = 0;
                                            $total_harga = 0;
                                            $cus_cat_id = $item['customer']['customer_category_id'];
                                            $status_kode = $item['status_kode'];
                                        @endphp
                                        @foreach ($item['details'] as $detail)
                                            @php
                                                $satuan_tipe = $detail['satuan'];
                                                if ($satuan_tipe != 'ROLL') {
                                                    $satuan_tipe = 'ECER';
                                                }
                                                $total_qty += $detail['qty'];
                                                $subtotal = 0;
                                                // $total_harga += $detail['harga'];
                                                if ($status_kode == 'Draft') {
                                                    if ($detail['bagian'] == 'body') {
                                                        $price = DB::table('tipe_kain_prices')
                                                            ->where([['tipe_kain_id', $detail['tipe_kain_id']], ['customer_category_id', $cus_cat_id], ['tipe', $satuan_tipe]])
                                                            ->selectRaw('tipe_kain_id,tipe,harga,periode')
                                                            ->orderByDesc('periode')
                                                            ->first();
                                                        if (isset($price)) {
                                                            // $qty_roll = DB::table('tipe_kain')
                                                            //     ->where('id', $detail['tipe_kain_id'])
                                                            //     ->first()->qty_roll;
                                                            $subtotal = $detail['qty_act'] * $price->harga;
                                                        }
                                                        $total_harga += $subtotal;
                                                    } else {
                                                        $price = DB::table('tipe_kain_accessories as tka')
                                                            ->join('accessories as a', 'a.id', '=', 'tka.accessories_id')
                                                            ->join('tipe_kain_prices AS tkp', 'tkp.tipe_kain_id', '=', 'tka.tipe_kain_id')
                                                            ->selectRaw('tka.id,tka.tipe_kain_id,a.name,a.harga_roll,a.harga_ecer,tkp.harga,tkp.periode')
                                                            ->where([['tka.id', $detail['tipe_kain_id']], ['tkp.customer_category_id', $cus_cat_id], ['tipe', $satuan_tipe]])
                                                            ->orderBy('tkp.periode', 'DESC')
                                                            ->first();
                                                        if (isset($price)) {
                                                            $harga = $price->harga_ecer + $price->harga;
                                                            if ($satuan_tipe == 'ROLL') {
                                                                $harga = $price->harga_roll + $price->harga;
                                                            }
                                                            $subtotal = $detail['qty_act'] * $harga;
                                                        }
                                                        $total_harga += $subtotal;
                                                    }
                                                } else {
                                                    $subtotal = $detail['qty_act'] * $detail['harga'];
                                                    $total_harga += $subtotal;
                                                }
                                                
                                            @endphp
                                        @endforeach
                                        <tr>
                                            <td>{{ $item['nomor'] }}</td>
                                            <td>{{ $item['customer']['nama'] ?? '-' }}</td>
                                            <td>{{ $item['customer']['category']['nama'] ?? '-' }}</td>
                                            <td>{{ $total_item }}</td>
                                            {{-- <td>{{ $total_qty }}</td> --}}
                                            <td>{{ 'Rp. ' . number_format($total_harga + $item['ongkir']) }}</td>
                                            <td>{{ $item['status_kode'] }}</td>
                                            <td>{{ date_format(date_create($item['tanggal_pesanan']), 'd-M-y') }}</td>
                                            <!-- <td>-</td> -->
                                            <td>{{ $item['jatuh_tempo'] ? date_format(date_create($item['jatuh_tempo']), 'd-M-y') : '-' }}
                                            </td>
                                            <td><a href="{{ route('order.detail', $item['id']) }}">View</a></td>
                                        </tr>
                                    @endforeach

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
            $(document).ready(function() {
                var dt = $('#table-so').DataTable({
                    ordering: false,
                    info: false,
                    lengthChange: false,
                    dom: '<"top">rt<"bottom"p><"clear">',
                });

                $('#button-cari').on('keyup click', function() {
                    dt.search($('#cari').val()).draw();
                });
            });
        </script>
    @endpush
</x-app-layout>
