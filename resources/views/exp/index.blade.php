<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Ekspedisi</h3>
                </div>

                <div class="">

                    <div class="rz-panel">

                        <h4>List Ekspedisi</h4>

                        <form class="uk-form-stacked uk-margin-medium" method="GET">

                            <div class="uk-child-width-1-3@s uk-flex-bottom" uk-grid>
                                <div>
                                    <label class="uk-form-label" for="customer">Customer</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input uk-form-small" name="customer" id="customer"
                                            type="text" value="{{ $customer }}" placeholder="Search by customer">
                                    </div>
                                </div>
                                <div>
                                    <label class="uk-form-label" for="so">SO Number</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input uk-form-small" name="so" id="so"
                                            type="text" value="{{ $so }}"
                                            placeholder="Search by SO Number">
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
                                        <th>No</th>
                                        <th>No. SO<br></th>
                                        <th>Customer<br></th>
                                        <th>Alamat Pengiriman<br></th>
                                        <th>Armada<br></th>
                                        <th>Status<br></th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datas as $index => $data)
                                        @if (isset($data->pesanan->customer))
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $data->pesanan->nomor }}</td>
                                                <td>{{ $data->pesanan->customer->nama }}</td>
                                                <td>{{ $data->pesanan->alamat_kirim }}</td>
                                                <td>{{ $data->armada }}</td>
                                                <td>{{ $data->status }}</td>
                                                <td><a href="{{ route('ekspedisi.edit', $data->id) }}">Update</a></td>
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
