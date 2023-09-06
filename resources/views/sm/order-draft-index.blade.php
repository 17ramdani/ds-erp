<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Sales &amp; Marketing</h3>
                </div>

                <div class="">

                    <div class="rz-panel">

                        <h4>Sales Order {{ $tipe }}</h4>
                        <div class="uk-margin uk-overflow-auto">
                            <table class="uk-table uk-table-small uk-table-divider uk-text-small" id="table-so">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nomor</th>
                                        <th>Nama Konsumen</th>
                                        <th>Jenis Kons</th>
                                        <th>Tanggal</th>
                                        <th>Jml. Item</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pesanans as $i => $item)
                                        <tr>
                                            <td>{{ $i + 1 }}</td>
                                            <td>{{ $item['nomor'] }}</td>
                                            <td>{{ $item['customer']['nama'] }}</td>
                                            <td>{{ $item['customer']['category']['nama'] }}</td>
                                            <td>{{ date_format(date_create($item['tanggal_pesanan']), 'd/m/Y') }}</td>
                                            <td>{{ count($item['details']) }}</td>
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
                $('#table-so').DataTable({
                    ordering: false,
                    info: false,
                    lengthChange: false,
                });
            });
        </script>
    @endpush
</x-app-layout>
