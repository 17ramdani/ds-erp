<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Customer Experience</h3>
                </div>

                <div class="">
                    <x-alert />
                    <div class="rz-panel uk-margin">

                        <h4>Customer Complaint <span uk-icon="chevron-right"></span> <span
                                class="uk-text-light">List</span></h4>


                        <div id="salesOrderPanel"
                            class="rz-panel-buttonset uk-child-width-1-6@m uk-child-width-1-3 uk-grid-small uk-margin"
                            uk-grid>
                            <div>
                                <a href="#" class="uk-active">
                                    <dl class="uk-margin-top">
                                        <dt>Total Keluhan</dt>
                                        <dd>{{ $komplain_count->total }}</dd>
                                    </dl>
                                </a>
                            </div>
                            <div>
                                <a href="#">
                                    <dl class="uk-margin-top">
                                        <dt>Diproses</dt>
                                        <dd>{{ $komplain_count->diproses }}</dd>
                                    </dl>
                                </a>
                            </div>
                            <div>
                                <a href="#">
                                    <dl class="uk-margin-top">
                                        <dt>Selesai</dt>
                                        <dd>{{ $komplain_count->selesai }}</dd>
                                    </dl>
                                </a>
                            </div>

                        </div>

                        <form class="uk-form-stacked" method="GET">

                            <div class="uk-child-width-1-3@s uk-flex-bottom" uk-grid>
                                <div>

                                    <label class="uk-form-label">SO Number</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" name="sonumber" type="text"
                                            value="{{ $sonumber ?? old('sonumber') }}" placeholder="e.g: SO/DS/123456">
                                    </div>

                                </div>
                                <div>

                                    <label class="uk-form-label">Customer</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" name="name" type="text"
                                            value="{{ $name ?? old('name') }}" placeholder="e.g Abdul">
                                    </div>

                                </div>
                                <div>

                                </div>
                                <div>

                                    <label class="uk-form-label">Start Date</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" name="start" value="{{ $start ?? old('start') }}"
                                            type="date">
                                    </div>

                                </div>
                                <div>

                                    <label class="uk-form-label">End Date</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" name="end" value="{{ $end ?? old('end') }}"
                                            type="date">
                                    </div>

                                </div>
                                <div>
                                    <button type="submit" class="uk-button uk-button-default">Tampilkan</button>
                                </div>
                            </div>


                        </form>
                    </div>



                    <div class="rz-panel">
                        <div class="uk-margin uk-overflow-auto">
                            <table class="uk-table uk-table-small uk-table-divider uk-text-small" id="table-so"
                                style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>No. SO</th>
                                        <th>Tanggal</th>
                                        <th>Customer</th>
                                        <th>No.HP</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($komplains as $i=>$komplain)
                                        @if (isset($komplain['pesanan']) && $komplain['pesanan']['customer'])
                                            <tr>
                                                <td>{{ $i + 1 }}</td>
                                                <td>{{ $komplain['pesanan']['nomor'] }}</td>
                                                <td>{{ date_format(date_create($komplain['tanggal']), 'd-M-y') }}</td>
                                                <td>{{ $komplain['pesanan']['customer']['nama'] }}</td>
                                                <td>{{ $komplain['pesanan']['customer']['nohp'] }}</td>
                                                <td>{{ $komplain['status'] }}</td>
                                                <td><a href="{{ route('komplain.edit', $komplain['id']) }}">View</a>
                                                </td>
                                            </tr>
                                        @endif

                                    @empty
                                        <tr>
                                            <td colspan="7">Belum ada data.</td>
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
