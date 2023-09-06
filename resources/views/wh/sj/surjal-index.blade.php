<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Ekspedisi</h3>
                </div>

                <div class="">

                    <div class="rz-panel">

                        <h4>Surat Jalan</h4>
                        <div class="uk-margin uk-overflow-auto">
                            <table class="uk-table uk-table-small uk-table-divider uk-text-small" id="table-sj"
                                style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>Tanggal Order</th>
                                        <th>No Invoice</th>
                                        <th>No. Surat Jalan</th>
                                        <th>Nama Konsumen</th>
                                        <th>Alamat Pengiriman</th>
                                        {{-- <th>Jenis Faktur</th> --}}
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datas as $data)
                                        @if (isset($data->pesanan))
                                            <tr>
                                                <td>{{ date_format(date_create($data->pesanan->tanggal_pesanan), 'd/m/y') }}
                                                </td>
                                                <td>{{ $data->pesanan->no_invoice }}</td>
                                                <td>{{ $data->no_sj }}</td>
                                                <td>{{ $data->pesanan->customer->nama }}</td>
                                                <td>{{ $data->pesanan->alamat_kirim }}</td>
                                                {{-- <td>{{ $data->jenis_faktur }}</td> --}}
                                                <td>{{ $data->status_sj }}</td>
                                                <td><a
                                                        href="{{ route('surjal.detail', ['id' => $data->id]) }}">Detail</a>
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
                var dt = $('#table-sj').DataTable({
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
