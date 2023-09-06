<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Sales &amp; Marketing</h3>
                </div>
                <div class="uk-margin">
                    <a href="{{ route ('order.index') }}" class="uk-button uk-button-default uk-border-rounded">
                        <span class="uk-margin-small-right" uk-icon="chevron-double-left"></span>Kembali
                    </a>
                </div>
                <div class="">
                    <div class="uk-child-width-1-3@s uk-margin" uk-grid>
                        <div>
                            <div class="rz-panel">
                                <div class="uk-grid-small" uk-grid>
                                    <div class="uk-width-auto"><i
                                            class="rz-panel-icon ph-lg ph-clock-counter-clockwise-thin"></i></div>
                                    <div class="uk-width-expand">
                                        <div class="rz-panel-subtext">
                                            Sales Order
                                        </div>
                                        <div class="rz-panel-heading">
                                            Fresh Order
                                        </div>

                                    </div>
                                    <div class="uk-width-auto">
                                        <div class="rz-panel-value">
                                            11
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div>
                            <form class="uk-child-width-1-2 uk-form-stacked" uk-grid>
                                <div>
                                    <label class="uk-form-label">Tanggal Mulai</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" type="date" placeholder="Some text...">
                                    </div>
                                </div>
                                <div>
                                    <label class="uk-form-label">Tanggal Akhir</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" type="date" placeholder="Some text...">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>


                    <div id="salesOrderPanel" class="rz-panel-buttonset uk-flex uk-flex-between uk-margin-small">
                        <dl class="uk-margin-top">
                            <dt>Total SO</dt>
                            <dd>25</dd>
                        </dl>
                        <dl>
                            <dt>Draft</dt>
                            <dd><a href="{{ route ('draft.index') }}">5</a></dd>
                        </dl>
                        <dl>
                            <dt>Approved</dt>
                            <dd>10</dd>
                        </dl>
                        <dl>
                            <dt>WIP</dt>
                            <dd>4</dd>
                        </dl>
                        <dl>
                            <dt>Invoicing</dt>
                            <dd>2</dd>
                        </dl>
                        <dl>
                            <dt>Delivery</dt>
                            <dd>7</dd>
                        </dl>
                        <dl>
                            <dt>Done</dt>
                            <dd>8</dd>
                        </dl>

                    </div>

                    <div class="rz-panel">

                        <h4>Sales Order</h4>
                        <div class="uk-margin uk-overflow-auto">
                            <table class="uk-table uk-table-small uk-table-divider uk-text-small">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Konsumen</th>
                                        <th>Jenis Kons</th>
                                        <th>Nama Barang</th>
                                        <th>QTY</th>
                                        <th>Tgl SO.</th>
                                        <th>Target SO.</th>
                                        <th>Status SO.</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>PT RUPADA TEGUH</td>
                                        <td>Reg</td>
                                        <td>SK.CM24S.HITAM REAKTIF 2.LG 42 170180 23011300100 01</td>
                                        <td>12</td>
                                        <td>5-Jan-23</td>
                                        <td>31-Jan-23</td>
                                        <td>Done</td>
                                        <td><a href="{{ route ('order.detail') }}">View</a></td>
                                    </tr>
                                    {{-- <tr>
                                        <td>2</td>
                                        <td>PT KRIDA ALAM LESTARI</td>
                                        <td>Reg</td>
                                        <td>B.DRYFIT CORAK YONEX.PUTIH.LG 40 150160 221228001 01</td>
                                        <td>12</td>
                                        <td>5-Jan-23</td>
                                        <td>15-Feb-23</td>
                                        <td>Invoicing</td>
                                        <td><a href="mod-sm-pesanan-detail.php">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>PT ENJIBI KARYA NUSANTARA</td>
                                        <td>Reg</td>
                                        <td>DK.PE 40S.PUTIH.LG 45 150160.228 2212240012 01</td>
                                        <td>24</td>
                                        <td>5-Jan-23</td>
                                        <td>15-Feb-23</td>
                                        <td>WIP</td>
                                        <td><a href="mod-sm-pesanan-detail.php">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>PT DELTA CIPTA SARANAPROMOSI</td>
                                        <td>Reg</td>
                                        <td>SK.CVC20S LACOSTE.HITAM.LG 36 210220 2207260010 01</td>
                                        <td>12</td>
                                        <td>5-Jan-23</td>
                                        <td>15-Feb-23</td>
                                        <td>Delivery</td>
                                        <td><a href="mod-sm-pesanan-detail.php">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>PT.SATU SEMBILAN DELAPAN INTERNASIONAL</td>
                                        <td>Reg</td>
                                        <td>KR.CVC20S LACOSTE.HITAM.42x9 220726003 01</td>
                                        <td>1</td>
                                        <td>5-Jan-23</td>
                                        <td>15-Feb-23</td>
                                        <td>Delivery</td>
                                        <td><a href="mod-sm-pesanan-detail.php">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>PT KUNPAY</td>
                                        <td>Reg</td>
                                        <td>MS.CVC20S LACOSTE.HITAM.72x3.5 220726002 01</td>
                                        <td>5</td>
                                        <td>5-Jan-23</td>
                                        <td>15-Feb-23</td>
                                        <td>Approved</td>
                                        <td><a href="mod-sm-pesanan-detail.php">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>PT DALCO PUTRA JAYA</td>
                                        <td>Reg</td>
                                        <td>B.DRYFIT CORAK YONEX.PUTIH.LG 40 150160 221228001 01</td>
                                        <td>5</td>
                                        <td>5-Jan-23</td>
                                        <td>31-Jan-23</td>
                                        <td>Done</td>
                                        <td><a href="mod-sm-pesanan-detail.php">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>PT NYONYA MODA NUSANTARA</td>
                                        <td>Reg</td>
                                        <td>DK.PE 40S.PUTIH.LG 45 150160.228 2212240012 01</td>
                                        <td>56</td>
                                        <td>5-Jan-23</td>
                                        <td>31-Jan-23</td>
                                        <td>Done</td>
                                        <td><a href="mod-sm-pesanan-detail.php">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>PT TRISARI JAKARTA</td>
                                        <td>Reg</td>
                                        <td>SK.CVC20S LACOSTE.HITAM.LG 36 210220 2207260010 01</td>
                                        <td>6</td>
                                        <td>5-Jan-23</td>
                                        <td>31-Jan-23</td>
                                        <td>Done</td>
                                        <td><a href="mod-sm-pesanan-detail.php">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>PT LOGIKA PRIMA PERDANA</td>
                                        <td>Dist</td>
                                        <td>SK.CM24S.HITAM REAKTIF 2.LG 42 170180 23011300100 01</td>
                                        <td>1</td>
                                        <td>5-Jan-23</td>
                                        <td>15-Feb-23</td>
                                        <td>Draft</td>
                                        <td><a href="mod-sm-pesanan-detail.php">View</a></td>
                                    </tr> --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>




        </div>
    </main>
</x-app-layout>
