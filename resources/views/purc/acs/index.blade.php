    <x-app-layout>
        <main id="mainContent">

            <div class="rz-bodyContent">
                <div class="rz-container">
                    <div>
                        <h3>Purchasing</h3>
                    </div>

                    <div class="">

                        <div class="rz-panel">
                            <x-alert />
                            <div class="uk-flex uk-flex-between">
                                <div>
                                    <h4>List Aksesoris</h4>
                                </div>
                                <div>
                                    <a href="{{ route('acs.add') }}"
                                        class="uk-button uk-button-default uk-button-small uk-border-rounded">Add</a>
                                </div>
                            </div>

                            <div class="uk-margin-medium">
                                <div class="uk-grid-small" uk-grid>
                                    <div class="uk-width-expand">
                                        <input type="text" class="uk-input" id="cari" placeholder="Search Aksesori">
                                    </div>
                                    <div class="uk-width-auto">
                                        <button type="button" id="button-cari" class="uk-button uk-button-primary uk-border-rounded">Search</button>
                                    </div>
                                </div>
                            </div>

                            <div class="uk-margin uk-overflow-auto">
                                <table class="uk-table uk-table-small uk-table-divider uk-text-small"  id="table-so">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Tipe</th>
                                            <th>Harga Roll</th>
                                            <th>Harga Ecer</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->type }}</td>
                                                <td>{{ $item->harga_roll }}</td>
                                                <td>{{ $item->harga_ecer }}</td>
                                                <td>
                                                    <ul class="uk-iconnav">
                                                        <li><a href="{{ route('acs.edit', ['id' => $item->id]) }}"
                                                                title="Edit" uk-icon="icon: file-edit"></a>
                                                        </li>
                                                        <li>
                                                            <form action="{{ route('acs.destroy', ['id' => $item->id]) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" title="Delete" onclick="return confirm('Apakah anda yakin untuk hapus data ini?')" uk-icon="icon: trash"></button>
                                                            </form>

                                                        </li>
                                                    </ul>
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
