<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Customer Experience</h3>
                </div>

                <div class="">
                    <div class="rz-panel">
                        <div class="uk-flex uk-flex-between">
                            <div>
                                <h4>Buyer Financing Registration</h4>
                            </div>
                            <div>

                            </div>
                        </div>

                        <div class="uk-margin-medium">
                            <div class="uk-grid-small" uk-grid>
                                <div class="uk-width-expand">
                                    <input type="text" class="uk-input" id="cari">
                                </div>
                                <div class="uk-width-auto">
                                    <button class="uk-button uk-button-primary uk-border-rounded" id="btn-cari">Search</button>
                                </div>
                            </div>
                        </div>
                        <div class="uk-margin uk-overflow-auto">
                            <table class="uk-table uk-table-small uk-table-divider uk-text-small" id="table-financing">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal Pengajuan</th>
                                        <th>Nama Pribadi</th>
                                        <th>Nama Perusahaan</th>
                                        <th>Nominal</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;   
                                    @endphp
                                    @foreach($financing as $fin)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ date('d-M-Y', strtotime($fin->tgl_pengajuan)) }}</td>
                                        <td>{{ $fin->customer->nama }}</td>
                                        <td>{{ $fin->customer->nama_perusahaan }}</td>
                                        <td>Rp.{{ number_format($fin->nominal) }}</td>
                                        <td>
                                            <a href="/fin-approval/{{ $fin->id }}">Approve</a>
                                            {{-- <a href="{{ route('custfin.approval',$fin->id) }}">Approve</a> --}}
                                        </td>
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
                var dt = $('#table-financing').DataTable({
                    ordering: false,
                    info: false,
                    lengthChange: false,
                    dom: '<"top">rt<"bottom"p><"clear">',
                });

                $('#btn-cari').on('keyup click', function() {
                    dt.search($('#cari').val()).draw();
                });
            });
        </script>
    @endpush
</x-app-layout>
