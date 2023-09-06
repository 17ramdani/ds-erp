<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Sales &amp; Marketing</h3>
                </div>

                <div class="rz-dashboard">
                    <x-alert />
                    <div class="rz-panel uk-margin-bottom">
                        <div class="uk-flex uk-flex-between">
                            <div>
                                <h4>Fresh Order <span uk-icon="chevron-right"></span> <span class="uk-text-light">List
                                        Pesanan</span></h4>
                            </div>
                            <div>
                                <!-- <a href="mod-sm-pesanan-add.php" class="uk-button uk-button-default uk-button-small uk-border-rounded">Add</a> -->
                            </div>
                        </div>

                        <div id="salesOrderPanel"
                            class="rz-panel-buttonset uk-child-width-1-6@m uk-child-width-1-3 uk-grid-small uk-margin"
                            uk-grid>
                            <div>
                                <a href="" class="uk-active">
                                    <dl class="uk-margin-top">
                                        <dt>Total SO</dt>
                                        <dd>{{ $pesanan_count->total_so }}</dd>
                                    </dl>
                                </a>
                            </div>
                            <div>
                                <a href="">
                                    <dl class="uk-margin-top">
                                        <dt>Draft</dt>
                                        <dd>{{ $pesanan_count->draft }}</dd>
                                    </dl>
                                </a>
                            </div>
                            <div>
                                <a href="">
                                    <dl class="uk-margin-top">
                                        <dt>Approved</dt>
                                        <dd>{{ $pesanan_count->approve }}</dd>
                                    </dl>
                                </a>
                            </div>
                            <div>
                                <a href="">
                                    <dl class="uk-margin-top">
                                        <dt>Invoicing</dt>
                                        <dd>{{ $pesanan_count->invoicing }}</dd>
                                    </dl>
                                </a>
                            </div>
                            <div>
                                <a href="">
                                    <dl class="uk-margin-top">
                                        <dt>Delivery</dt>
                                        <dd>{{ $pesanan_count->dilevery }}</dd>
                                    </dl>
                                </a>
                            </div>
                            <div>
                                <a href="">
                                    <dl class="uk-margin-top">
                                        <dt>Selesai</dt>
                                        <dd>{{ $pesanan_count->done }}</dd>
                                    </dl>
                                </a>
                            </div>
                        </div>

                        <div class="uk-margin">
                            <form class="uk-form-stacked">
                                <div class="uk-child-width-1-3@s uk-flex-bottom" uk-grid>
                                    <div>

                                        <label class="uk-form-label">SO Number</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" type="text" name="sonumber"
                                                value="{{ $sonumber }}" placeholder="e.g: SO/DS/123456">
                                        </div>

                                    </div>
                                    <div>

                                        <label class="uk-form-label">Customer</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" type="text" name="name"
                                                value="{{ $name }}" placeholder="e.g Abdul">
                                        </div>

                                    </div>
                                    <div>

                                    </div>
                                    <div>

                                        <label class="uk-form-label">Start Date</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" name="start" value="{{ $start }}"
                                                type="date">
                                        </div>

                                    </div>
                                    <div>

                                        <label class="uk-form-label">End Date</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" name="end" value="{{ $end }}"
                                                type="date">
                                        </div>

                                    </div>
                                    <div>
                                        <button type="submit" class="uk-button uk-button-default">Tampilkan</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>




                    <div class="rz-panel">
                        <div class="uk-margin uk-overflow-auto">
                            <table class="uk-table uk-table-small uk-table-divider uk-text-small" id="table-so"
                                style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Inquery Number<br></th>
                                        <th>No. So<br></th>
                                        <th>Customer<br></th>
                                        <th>Jenis Kain<br></th>
                                        <th>Tipe Kain<br></th>
                                        <th>Warna<br></th>
                                        <th>Qty (Roll)<br></th>
                                        <th>QTY (Kg)<br></th>
                                        <th>Action Inq.</th>
                                        <th>Action SO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($orders as $i=>$order)
                                        @if (isset($order['customer']))
                                            <tr>
                                                <td>{{ $i + 1 }}</td>
                                                <td>{{ $order['inq_number'] }}</td>
                                                <td>{{ $order['nomor'] ?? '-' }}</td>
                                                <td>{{ $order['customer']['nama'] }}</td>
                                                <td>{{ $order['jenis_kain'] }}</td>
                                                <td>{{ $order['tipe_kain'] }}</td>
                                                <td>{{ $order['warna'] }}</td>
                                                <td>{{ $order['qty'] }}</td>
                                                <td>{{ $order['qty_act'] }}</td>
                                                <td><a href="{{ route('fresh-order.show', $order['id']) }}">View</a>
                                                </td>
                                                <td><a href="{{ route('fresh-order.edit', $order['id']) }}">View</a>
                                                </td>
                                            </tr>
                                        @endif

                                    @empty
                                        <tr>
                                            <td colspan="11">Belum ada data</td>
                                        </tr>
                                    @endforelse


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>




        </div>
    </main>
    <x-datatable />
</x-app-layout>
