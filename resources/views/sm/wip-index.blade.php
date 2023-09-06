<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Sales &amp; Marketing</h3>
                </div>

                <div class="">

                    <div class="rz-panel">
                        <h4>Pesanan X WIP</h4>
                        <div class="uk-margin-medium-bottom rz-panel-pop">
                            <form class="uk-form-stacked">

                                <div class="uk-margin uk-child-width-1-3@s" uk-grid>
                                    <div>
                                        <label class="uk-form-label">Tanggal Awal</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" type="date">
                                        </div>
                                    </div>
                                    <div>
                                        <label class="uk-form-label">Tanggal Akhir</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" type="date">
                                        </div>
                                    </div>
                                    <div class="uk-flex uk-flex-bottom">
                                        <a href="" class="uk-button uk-button-primary">Tampilkan</a>
                                    </div>
                                </div>

                            </form>
                        </div>

                        <div class="uk-margin uk-overflow-auto">
                            <table class="uk-table uk-table-small uk-table-divider uk-text-small">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Jenis</th>
                                        <th>Nama Konsumen</th>
                                        <th>Jenis Kons</th>
                                        <th>Nama Barang</th>
                                        <th>QTY</th>
                                        <th>Tgl SO.</th>
                                        <th>Target SO.</th>

                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Retail</td>
                                        <td>PT RUPADA TEGUH</td>
                                        <td>Reg</td>
                                        <td>SK.CM24S.HITAM REAKTIF 2.LG 42 170180 23011300100 01</td>
                                        <td>12</td>
                                        <td>5-Jan-23</td>
                                        <td>31-Jan-23</td>

                                        <td><a href="{{ route('order.detail') }}">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Retail</td>
                                        <td>PT KRIDA ALAM LESTARI</td>
                                        <td>Reg</td>
                                        <td>B.DRYFIT CORAK YONEX.PUTIH.LG 40 150160 221228001 01</td>
                                        <td>12</td>
                                        <td>5-Jan-23</td>
                                        <td>15-Feb-23</td>

                                        <td><a href="{{ route('order.detail') }}">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Retail</td>
                                        <td>PT ENJIBI KARYA NUSANTARA</td>
                                        <td>Reg</td>
                                        <td>DK.PE 40S.PUTIH.LG 45 150160.228 2212240012 01</td>
                                        <td>24</td>
                                        <td>5-Jan-23</td>
                                        <td>15-Feb-23</td>

                                        <td><a href="{{ route('order.detail') }}">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Retail</td>
                                        <td>PT DELTA CIPTA SARANAPROMOSI</td>
                                        <td>Reg</td>
                                        <td>SK.CVC20S LACOSTE.HITAM.LG 36 210220 2207260010 01</td>
                                        <td>12</td>
                                        <td>5-Jan-23</td>
                                        <td>15-Feb-23</td>

                                        <td><a href="{{ route('order.detail') }}">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Retail</td>
                                        <td>PT.SATU SEMBILAN DELAPAN INTERNASIONAL</td>
                                        <td>Reg</td>
                                        <td>KR.CVC20S LACOSTE.HITAM.42x9 220726003 01</td>
                                        <td>1</td>
                                        <td>5-Jan-23</td>
                                        <td>15-Feb-23</td>

                                        <td><a href="{{ route('order.detail') }}">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Retail</td>
                                        <td>PT KUNPAY</td>
                                        <td>Reg</td>
                                        <td>MS.CVC20S LACOSTE.HITAM.72x3.5 220726002 01</td>
                                        <td>5</td>
                                        <td>5-Jan-23</td>
                                        <td>15-Feb-23</td>

                                        <td><a href="{{ route('order.detail') }}">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>FO</td>
                                        <td>PT DALCO PUTRA JAYA</td>
                                        <td>Reg</td>
                                        <td>B.DRYFIT CORAK YONEX.PUTIH.LG 40 150160 221228001 01</td>
                                        <td>5</td>
                                        <td>5-Jan-23</td>
                                        <td>31-Jan-23</td>

                                        <td><a href="{{ route('order.detail') }}">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>FO</td>
                                        <td>PT NYONYA MODA NUSANTARA</td>
                                        <td>Reg</td>
                                        <td>DK.PE 40S.PUTIH.LG 45 150160.228 2212240012 01</td>
                                        <td>56</td>
                                        <td>5-Jan-23</td>
                                        <td>31-Jan-23</td>

                                        <td><a href="{{ route('order.detail') }}">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Retail</td>
                                        <td>PT TRISARI JAKARTA</td>
                                        <td>Reg</td>
                                        <td>SK.CVC20S LACOSTE.HITAM.LG 36 210220 2207260010 01</td>
                                        <td>6</td>
                                        <td>5-Jan-23</td>
                                        <td>31-Jan-23</td>

                                        <td><a href="{{ route('order.detail') }}">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>FO</td>
                                        <td>PT LOGIKA PRIMA PERDANA</td>
                                        <td>Dist</td>
                                        <td>SK.CM24S.HITAM REAKTIF 2.LG 42 170180 23011300100 01</td>
                                        <td>1</td>
                                        <td>5-Jan-23</td>
                                        <td>15-Feb-23</td>

                                        <td><a href="{{ route('order.detail') }}">View</a></td>
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
