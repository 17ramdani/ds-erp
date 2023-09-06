<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Customer Experience</h3>
                </div>

                <div class="">

                    <div class="rz-panel uk-margin">
                        <h4>Point Reward</h4>
                        <div uk-grid>
                            <div class="uk-width-expand">
                                <div uk-grid>
                                    <div>Periode: <input class="uk-input uk-form-width-medium" type="date" placeholder="Some text..."></div>
                                    <div>s/d: <input class="uk-input uk-form-width-medium" type="date" placeholder="Some text..."></div>
                                </div>
                            </div>
                            <div>
                                <a href="" class="uk-button uk-button-default uk-border-rounded">Tampilkan</a>
                                <a href="" class="uk-button uk-button-default uk-border-rounded">Cetak Laporan</a>
                            </div>
                        </div>


                    </div>
                    <div class="rz-panel-buttonset uk-flex uk-flex-between uk-margin-small">
                        <dl class="uk-margin-top">
                            <dt>Point Redeem</dt>
                            <dd>25</dd>
                        </dl>
                        <dl>
                            <dt>Open</dt>
                            <dd>10</dd>
                        </dl>
                        <dl>
                            <dt>On process</dt>
                            <dd>3</dd>
                        </dl>
                        <dl>
                            <dt>Done</dt>
                            <dd>12</dd>
                        </dl>

                    </div>
                    <div class="rz-panel">
                        <h4>Daftar Penukaran Point</h4>
                        <div class="uk-margin uk-overflow-auto">
                            <table class="uk-table uk-table-small uk-table-divider uk-text-small">
                                <thead>
                                    <tr>
                                        <th>Customer</th>
                                        <th>Tanggal</th>
                                        <th>Jml. Merchant</th>
                                        <th>Jml. Point Ditukar</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>PT. Berkah Sentosa Makmur</td>
                                        <td>10-Feb-23</td>
                                        <td>2</td>
                                        <td>250</td>
                                        <td>Open</td>
                                        <td><a href="{{ route('cust-reward.detail') }}">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td>CV. Indah Sejahtera Abadi</td>
                                        <td>9-Feb-23</td>
                                        <td>1</td>
                                        <td>100</td>
                                        <td>Open</td>
                                        <td><a href="{{ route('cust-reward.detail') }}">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td>Budi Clothing</td>
                                        <td>1-Feb-23</td>
                                        <td>3</td>
                                        <td>400</td>
                                        <td>On process</td>
                                        <td><a href="{{ route('cust-reward.detail') }}">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td>Hadi Nugroho</td>
                                        <td>25-Jan-23</td>
                                        <td>1</td>
                                        <td>150</td>
                                        <td>Done</td>
                                        <td><a href="{{ route('cust-reward.detail') }}">Detail</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>




        </div>
    </main>
</x-app-layout>
