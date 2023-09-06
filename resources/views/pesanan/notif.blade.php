<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Notifikasi</h3>
                </div>

                <div class="">

                    <div id="dashboardIndex" class="rz-panel">
                        <h4>Pesanan Masuk</h4>
                        <table class="uk-table uk-table-divider uk-table-striped"  id="table-so">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nomor Pesanan</th>
                                    <th>Customer</th>
                                    <th>Tanggal</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pesanan as $index => $notif)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $notif->nomor }}</td>
                                    <td>{{ $notif->customer->nama }}</td>
                                    <td>{{ date_format(date_create($notif->tanggal_pesanan), 'd-M-y') }}</td>
                                    <td> <a href="{{ route('update.notif', $notif->id) }}" class="btn-lihat-detail">Lihat Detail</a></td>
                                </tr>
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
