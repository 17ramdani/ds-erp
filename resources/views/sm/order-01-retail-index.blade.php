<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Sales &amp; Marketing</h3>
                </div>
                <div class="uk-margin">
                    <a href="{{ route('order.index') }}" class="uk-button uk-button-default uk-border-rounded">
                        <span class="uk-margin-small-right" uk-icon="chevron-double-left"></span>Kembali
                    </a>
                </div>
                <div class="">
                    <div class="uk-margin" uk-grid>
                        <div class="uk-width-1-3@s">
                            <div class="rz-panel">
                                <div class="uk-grid-small" uk-grid>
                                    <div class="uk-width-auto"><i class="rz-panel-icon ph-lg ph-stack-thin"></i></div>
                                    <div class="uk-width-expand">
                                        <div class="rz-panel-subtext">
                                            Sales Order
                                        </div>
                                        <div class="rz-panel-heading">
                                            {{ $tipe }}
                                        </div>

                                    </div>
                                    <div class="uk-width-auto">
                                        <div class="rz-panel-value">
                                            {{ $tipe_count }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="uk-width-expand">
                            <form method="GET"
                                @if ($tipe == 'Retail') action="{{ route('retail.index', 'Retail') }}" @endif
                                @if ($tipe == 'Fresh Order') action="{{ route('retail.index', 'Fresh Order') }}" @endif
                                @if ($tipe == 'Development') action="{{ route('retail.index', 'Development') }}" @endif
                                class="uk-child-width-1-3 uk-form-stacked" uk-grid>
                                <div>
                                    <label class="uk-form-label">Tanggal Mulai</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" name="tanggal_mulai" value="{{ $tglm }}"
                                            type="date" placeholder="Some text...">
                                    </div>
                                </div>
                                <div>
                                    <label class="uk-form-label">Tanggal Akhir</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" name="tanggal_akhir" value="{{ $tgla }}"
                                            type="date" placeholder="Some text...">
                                    </div>
                                </div>
                                <div class="uk-flex uk-flex-bottom">
                                    <button type="submit"
                                        class="uk-button uk-button-default uk-border-rounded">Tampilkan</button>
                                </div>
                            </form>
                        </div>
                    </div>


                    <div id="salesOrderPanel" class="rz-panel-buttonset uk-flex uk-flex-between uk-margin-small">
                        <dl class="uk-margin-top">
                            <dt>Total SO</dt>
                            <dd>{{ $pesanan_count->total_so }}</dd>
                        </dl>
                        <dl>
                            <dt>Draft</dt>
                            <dd>{{ $pesanan_count->draft }}</dd>
                        </dl>
                        <dl>
                            <dt>Approved</dt>
                            <dd>{{ $pesanan_count->approve }}</dd>
                        </dl>
                        <dl>
                            <dt>WIP</dt>
                            <dd>{{ $pesanan_count->wip }}</dd>
                        </dl>
                        <dl>
                            <dt>Invoicing</dt>
                            <dd>{{ $pesanan_count->invoicing }}</dd>
                        </dl>
                        <dl>
                            <dt>Delivery</dt>
                            <dd>{{ $pesanan_count->dilevery }}</dd>
                        </dl>
                        <dl>
                            <dt>Done</dt>
                            <dd>{{ $pesanan_count->done }}</dd>
                        </dl>

                    </div>

                    <div class="rz-panel">

                        <h4>Sales Order</h4>
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
                        <div class="uk-margin uk-overflow-auto">
                            <table class="uk-table uk-table-small uk-table-divider uk-text-small" id="table-so">
                                <thead>
                                    <tr>
                                        <th>No SO</th>
                                        <th>Cust</th>
                                        <th>Jenis Cust</th>
                                        <th>Total Item</th>
                                        <th>Total Qty</th>
                                        <th>Total Harga</th>
                                        <th>Status SO</th>
                                        <th>Tanggal SO</th>
                                        <th>Target Proses</th>
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
                                        @endphp
                                        @foreach ($item['details'] as $detail)
                                            @php
                                                $total_qty += $detail['qty'];
                                                $total_harga += $detail['harga'];
                                            @endphp
                                        @endforeach
                                        <tr>
                                            <td>{{ $item['nomor'] }}</td>
                                            <td>{{ $item['customer']['nama'] }}</td>
                                            <td>{{ $item['customer']['category']['nama'] }}</td>
                                            <td>{{ $total_item }}</td>
                                            <td>{{ $total_qty }}</td>
                                            <td>{{ 'Rp. ' . number_format($total_harga) }}</td>
                                            <td>{{ $item['status_kode'] }}</td>
                                            <td>{{ date_format(date_create($item['tanggal_pesanan']), 'd-M-y') }}</td>
                                            <td>-</td>
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
