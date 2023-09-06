<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Customer Experience</h3>
                </div>

                <div class="rz-dashboard">

                    <div class="uk-margin-medium">
                        <form class="uk-child-width-1-5@m uk-child-width-1-2@s uk-form-stacked uk-grid-small" uk-grid>
                            <div>
                                <label class="uk-form-label">Tgl. Start</label>
                                <div class="uk-form-controls">
                                    <input type="date" class="uk-input">
                                </div>
                            </div>
                            <div>
                                <label class="uk-form-label">Tgl. End</label>
                                <div class="uk-form-controls">
                                    <input type="date" class="uk-input">
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-bottom">
                                <a href="" class="uk-button uk-button-default uk-border-rounded">Tampilkan</a>
                            </div>
                        </form>
                    </div>


                    <div class="rz-panel">

                        <div class="uk-flex uk-flex-between">
                            <div>
                                <h4>Net Promoter Score</h4>
                            </div>
                            <!-- <div>
                            <a href="mod-sm-salesCom-add.php" class="uk-button uk-button-default uk-button-small uk-border-rounded">Ajukan Komisi</a>
                        </div> -->
                        </div>
                        <div class="uk-child-width-1-4@m uk-child-width-1-2 uk-grid-small uk-margin" uk-grid>
                            <div>
                                <a href="" class="rz-panel-filter">
                                    <div class="uk-flex uk-flex-between">
                                        <div>Pesanan <br>Selesai
                                        </div>
                                        <span class="uk-text-bold">{{ $pesanan_selesai }}</span>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="" class="rz-panel-filter">
                                    <div class="uk-flex uk-flex-between">
                                        <div>Pesanan
                                            <div>
                                                <i class="ph-fill ph-star"></i>
                                            </div>
                                        </div>
                                        <span class="uk-text-bold">{{ $satu }}</span>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="" class="rz-panel-filter">
                                    <div class="uk-flex uk-flex-between">
                                        <div>Pesanan
                                            <div><i class="ph-fill ph-star"></i>
                                                <i class="ph-fill ph-star"></i>
                                            </div>
                                        </div>
                                        <span class="uk-text-bold">{{ $dua }}</span>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="" class="rz-panel-filter">
                                    <div class="uk-flex uk-flex-between">
                                        <div>Pesanan
                                            <div><i class="ph-fill ph-star"></i>
                                                <i class="ph-fill ph-star"></i>
                                                <i class="ph-fill ph-star"></i>
                                            </div>
                                        </div>
                                        <span class="uk-text-bold">{{ $tiga }}</span>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="" class="rz-panel-filter">
                                    <div class="uk-flex uk-flex-between">
                                        <div>Pesanan
                                            <div><i class="ph-fill ph-star"></i>
                                                <i class="ph-fill ph-star"></i>
                                                <i class="ph-fill ph-star"></i>
                                                <i class="ph-fill ph-star"></i>
                                            </div>
                                        </div>
                                        <span class="uk-text-bold">{{ $empat }}</span>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="" class="rz-panel-filter">
                                    <div class="uk-flex uk-flex-between">
                                        <div>Pesanan
                                            <div><i class="ph-fill ph-star"></i>
                                                <i class="ph-fill ph-star"></i>
                                                <i class="ph-fill ph-star"></i>
                                                <i class="ph-fill ph-star"></i>
                                                <i class="ph-fill ph-star"></i>
                                            </div>
                                        </div>
                                        <span class="uk-text-bold">{{ $lima }}</span>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="uk-margin-medium">
                            <div class="uk-grid-small" uk-grid>
                                <div class="uk-width-expand">
                                    <input type="text" class="uk-input" id="cari" placeholder="">
                                </div>
                                <div class="uk-width-auto">
                                    <button type="button" id="button-cari" class="uk-button uk-button-primary uk-border-rounded">Search</button>
                                </div>
                            </div>
                        </div>
                        <div class="uk-margin uk-overflow-auto">
                            <table class="uk-table uk-table-small uk-table-divider uk-text-small" id="table-so" style="text-overflow: ellipsis;white-space: hidden;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No. SO </th>
                                        <th>Nama Konsumen</th>
                                        <th>Tanggal Pesanan</th>
                                        <th>Target Pesanan</th>
                                        <th>Tgl Pesanan Selesai</th>
                                        <th>Total Pesanan (juta)</th>
                                        <th>Total Item</th>
                                        <th>Rating Pesanan</th>
                                        <th>Nama CS</th>
                                        <th class="uk-table-expand">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach ($data as $item)
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->pesanan->nomor }}</td>
                                        <td>{{ $item->customer->nama }}</td>
                                        <td>{{ date_create($item->pesanan->tanggal_pesanan)->format('d-m-Y') }}</td>
                                        <td>{{ date_create($item->pesanan->target_pesanan)->format('d-m-Y') }}</td>
                                        <td>{{ date_create($item->date_input)->format('d-m-Y') }}</td>
                                        <td>{{ number_format($item->pesanan->total, 0, ',', '.') }} </td>
                                        <td>{{ count($item->pesanan->details) }}</td>
                                        <td> @for ($i = 1; $i <= 5; $i++) @if ($i <=$item->star)
                                                <i class="ph-star-fill active" style="color: yellow;"></i>
                                                @else
                                                <i class="ph-star-fill"></i>
                                                @endif
                                                @endfor</td>
                                        <td>{{ $item->pesanan->customer_service->nama }}</td>
                                        <td>
                                            <ul class="uk-iconnav">
                                                <li><a href="#" title="View" uk-icon="icon: eye"></a></li>
                                                <li><a href="#" title="Edit" uk-icon="icon: file-edit"></a></li>
                                                <li><a href="#" title="Delete" uk-icon="icon: trash"></a></li>
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

    <div id="gambarKain" class="uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

            <button class="uk-modal-close-default" type="button" uk-close></button>

            <img src="https://duniasandang.com/wp-content/uploads/2022/01/combed-30s-misty-dunia-sandang.jpg" alt="">

        </div>
    </div>
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
                ordering: true,
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