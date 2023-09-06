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
                                <h4>Customer Registration</h4>
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
                                    <button class="uk-button uk-button-primary uk-border-rounded" id="button-cari">Search</button>
                                </div>
                            </div>
                        </div>
                        <div class="uk-margin uk-overflow-auto">
                            <table class="uk-table uk-table-small uk-table-divider uk-text-small" id="table-membership">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal Daftar</th>
                                        <th>Nama</th>
                                        <th>Tipe</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($cmember->count() > 0)
                                        @foreach ($cmember as $mem)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ strtoupper($mem->created_at->format('d-M-Y')) }}</td>
                                                <td>{{ strtoupper($mem->customer->nama) }}</td>
                                                <td>
                                                    @if ($mem->customer_category_id)
                                                        {{ strtoupper($mem->category->nama) }}
                                                    @else
                                                        N/A
                                                    @endif
                                                </td>
                                                <td><a href="/reg-approval/{{ $mem->id }}">Approve</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    {{-- <tr>
                                        <td>1</td>
                                        <td>15-Dec-22</td>
                                        <td>Parke McInnery</td>
                                        <td>MEMBER</td>
                                        <td><a href="{{ route('reg.approval') }}">Approve</a></td>
                                    </tr> --}}
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
                var dt = $('#table-membership').DataTable({
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
