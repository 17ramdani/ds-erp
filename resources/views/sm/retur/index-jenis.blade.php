<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Sales &amp; Marketing</h3>
                </div>



                <div class="rz-panel uk-margin-bottom">

                    <h4>List Retur {{ $jenis }}</h4>

                    <form class="uk-form-stacked uk-margin-medium" method="GET">

                        <div class="uk-child-width-1-3@s uk-flex-bottom" uk-grid>
                            <div>
                                <label class="uk-form-label" for="customer">Customer</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input uk-form-small" name="customer" id="customer"
                                        value="{{ $customer }}" type="text" placeholder="Search by customer">
                                </div>
                            </div>
                            <div>
                                <label class="uk-form-label" for="so">SO Number</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input uk-form-small" name="so" id="so"
                                        value="{{ $so }}" type="text" placeholder="Search by SO Number">
                                </div>
                            </div>
                            <div>
                                <input type="hidden" name="jenis" value="{{ $jenis }}">
                                <button type="submit"
                                    class="uk-button uk-button-default uk-button-small">Search</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div id="salesOrderPanel"
                    class="rz-panel-buttonset uk-child-width-1-6@m uk-child-width-1-3 uk-grid-small uk-margin" uk-grid>
                    <div>
                        <a href="" class="uk-active">
                            <dl class="uk-margin-top">
                                <dt>Draft</dt>
                                <dd>{{ $count_draft }}</dd>
                            </dl>
                        </a>
                    </div>
                    <div>
                        <a href="">
                            <dl class="uk-margin-top">
                                <dt>On Check</dt>
                                <dd>{{ $count_oncheck }}</dd>
                            </dl>
                        </a>
                    </div>
                    <div>
                        <a href="">
                            <dl class="uk-margin-top">
                                <dt>Tunggu Konfirmasi</dt>
                                <dd>{{ $count_tk }}</dd>
                            </dl>
                        </a>
                    </div>
                    <div>
                        <a href="">
                            <dl class="uk-margin-top">
                                <dt>Dikirim</dt>
                                <dd>{{ $count_dikirim }}</dd>
                            </dl>
                        </a>
                    </div>
                    <div>
                        <a href="">
                            <dl class="uk-margin-top">
                                <dt>Selesai</dt>
                                <dd>{{ $count_selesai }}</dd>
                            </dl>
                        </a>
                    </div>
                </div>


                <div class="rz-panel">

                    <div class="uk-margin uk-overflow-auto">
                        <table class="uk-table uk-table-small uk-table-divider uk-text-small" id="table-so"
                            style="width: 100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>No. SO<br></th>
                                    <th>Customer<br></th>
                                    <th>Order Date<br></th>
                                    <th>Grand Total<br></th>
                                    <th>Status<br></th>
                                    <th>Update Date<br></th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $i => $data)
                                    @if (isset($data->pesanan->customer))
                                        <tr>
                                            <td>{{ $i + 1 }}</td>
                                            <td>{{ $data->pesanan->nomor }}</td>
                                            <td>{{ $data->pesanan->customer->nama }}</td>
                                            <td>{{ date_format(date_create($data->pesanan->tanggal_pesanan), 'd-M-Y') }}
                                            </td>
                                            <td>0</td>
                                            <td>{{ $data->status }}</td>
                                            <td>{{ date_format(date_create($data->updated_at), 'd-M-Y') }}</td>
                                            <td><a href="{{ route('retur.so_detail', $data->id) }}">View</a></td>
                                        </tr>
                                    @endif
                                @endforeach

                            </tbody>
                        </table>
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
