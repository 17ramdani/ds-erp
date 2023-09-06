<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Customer Experience</h3>
                </div>

                <div class="">

                    <div class="rz-panel uk-margin">
                        <x-alert/>

                        <h4>Customer <span uk-icon="chevron-right"></span> <span class="uk-text-light">List</span></h4>


                        <div id="salesOrderPanel"
                            class="rz-panel-buttonset uk-child-width-1-6@m uk-child-width-1-3 uk-grid-small uk-margin"
                            uk-grid>
                            <div>
                                <a href="" class="uk-active">
                                    <dl class="uk-margin-top">
                                        <dt>Total</dt>
                                        <dd>{{ $total }}</dd>
                                    </dl>
                                </a>
                            </div>
                            <div>
                                <a href="">
                                    <dl class="uk-margin-top">
                                        <dt>Reguler</dt>
                                        <dd>{{ $reguler }}</dd>
                                    </dl>
                                </a>
                            </div>
                            <div>
                                <a href="">
                                    <dl class="uk-margin-top">
                                        <dt>Member</dt>
                                        <dd>{{ $member }}</dd>
                                    </dl>
                                </a>
                            </div>
                            <div>
                                <a href="">
                                    <dl class="uk-margin-top">
                                        <dt>Distributor</dt>
                                        <dd>{{ $distributor }}</dd>
                                    </dl>
                                </a>
                            </div>

                        </div>

                        <div class="uk-margin-medium">
                            <div class="uk-grid-small" uk-grid>
                                <div class="uk-width-expand">
                                    <input type="text" class="uk-input" id="cari" placeholder="">
                                </div>
                                <div class="uk-width-auto">
                                    <button type="button" id="button-cari"
                                        class="uk-button uk-button-primary uk-border-rounded">Search</button>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="rz-panel">
                        <div class="uk-flex uk-flex-between">
                            <div>

                            </div>
                            <div>
                                <a href=""
                                    class="uk-button uk-button-small uk-button-default uk-border-rounded uk-margin-small-right">Pending</a>
                                <a href="{{ route('customer.add') }}"
                                    class="uk-button uk-button-small uk-button-default uk-border-rounded"><span
                                        class="uk-margin-small-right"
                                        uk-icon="icon: plus-circle; ratio: 0.75"></span>Add New</a>
                            </div>
                        </div>


                        <div class="uk-margin uk-overflow-auto">
                            <table class="uk-table uk-table-small uk-table-divider uk-text-small" id="table-so">
                                <thead>
                                    <tr>
                                        <th>Kode Konsumen</th>
                                        <th>Kode Kategori</th>
                                        <th>Nama</th>
                                        <th>Telepon</th>
                                        <th>Alamat</th>
                                        <th>Ulang Tahun</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $customer)
                                    <tr>
                                        <td>
                                            @if ($customer->pesanan->isNotEmpty())
                                            {{ $customer->pesanan->sortByDesc('created_at')->first()->nomor }}
                                            @endif
                                        </td>
                                        <td>{{ $customer->category->nama }}</td>
                                        <td>{{ $customer->nama }}</td>
                                        <td>{{ $customer->nohp }}</td>
                                        <td>{{ $customer->alamat }}</td>
                                        <td>{{ $customer->dob }}</td>
                                        <td>
                                            <ul class="uk-iconnav">
                                                <li><a href="{{ route('customer.detail', ['id' => $customer->id]) }}"
                                                        title="Edit" uk-icon="icon: file-edit"></a>
                                                </li>
                                                <li>
                                                    <form action="{{ route('customer.destroy', ['id' => $customer->id]) }}" method="POST">
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
        $(document).ready(function () {
            var dt = $('#table-so').DataTable({
                ordering: false,
                info: false,
                lengthChange: false,
                dom: '<"top">rt<"bottom"p><"clear">',
            });

            $('#button-cari').on('keyup click', function () {
                dt.search($('#cari').val()).draw();
            });
        });

    </script>
    @endpush


</x-app-layout>
