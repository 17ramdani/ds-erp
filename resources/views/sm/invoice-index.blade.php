<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Sales &amp; Marketing</h3>
                </div>

                <div class="">

                    <div class="rz-panel">

                        <h4>Invoice</h4>

                        <form class="uk-form-stacked uk-margin-medium" method="GET">

                            <div class="uk-child-width-1-3@s uk-flex-bottom" uk-grid>
                                <div>
                                    <label class="uk-form-label" for="customer">Customer</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input uk-form-small" name="customer" id="customer"
                                            type="text" placeholder="Search by customer"
                                            value="{{ $customer ?? '' }}">
                                    </div>
                                </div>
                                <div>
                                    <label class="uk-form-label" for="po">SO Number</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input uk-form-small" name="po" id="po"
                                            type="text" placeholder="Search by SO Number"
                                            value="{{ $po ?? '' }}">
                                    </div>
                                </div>
                                <div>
                                    <button type="submit"
                                        class="uk-button uk-button-default uk-button-small">Search</button>
                                </div>
                            </div>


                        </form>

                        <div class="uk-margin uk-overflow-auto">
                            <table class="uk-table uk-table-small uk-table-divider uk-text-small" id="table-so"
                                style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>No. Invoice<br></th>
                                        <th>No. SO<br></th>
                                        <th>Order Date<br></th>
                                        <th>Customer<br></th>
                                        <th>Total Item</th>
                                        <th>Grand Total</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($datas as $index => $data)
                                        @php
                                            $grandTotal = 0;
                                        @endphp
                                        @foreach ($data['details'] as $detail)
                                            @php  $grandTotal += $detail->harga * $detail->qty_act;@endphp
                                        @endforeach
                                        @if (isset($data['customer']))
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $data->no_invoice ?? '-' }}</td>
                                                <td>{{ $data->nomor }}</td>
                                                <td>{{ date_format(date_create($data->tanggal_pesanan), 'd/m/Y') }}</td>
                                                <td>{{ $data['customer']->nama ?? '-' }}</td>
                                                <td>{{ count($data['details']) . ' Item' }}<br></td>
                                                <td>{{ number_format($grandTotal) }}<br></td>
                                                <td><a
                                                        href="{{ route('invoice.detail', ['id' => $data->id]) }}">View</a>
                                                </td>
                                            </tr>
                                        @endif
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
