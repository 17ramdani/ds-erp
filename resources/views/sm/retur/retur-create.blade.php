<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Sales &amp; Marketing</h3>
                </div>

                <div class="">

                    <div class="rz-panel">
                        <h4>Detail Retur</h4>
                        <div class="uk-child-width-1-2@s uk-grid-large" uk-grid>
                            <div>
                                <table class="rz-table-vertical">
                                    <tr>
                                        <th class="uk-text-nowrap">No. Invoice</th>
                                        <td class="uk-table-shrink">:</td>
                                        <td>INV.123456789</td>
                                    </tr>
                                    <tr>
                                        <th>Customer</th>
                                        <td class="uk-table-shrink">:</td>
                                        <td>Ahmad</td>
                                    </tr>
                                    <tr>
                                        <th>Sales</th>
                                        <td class="uk-table-shrink">:</td>
                                        <td>Wawan Abdurrahman</td>
                                    </tr>
                                    <tr>
                                        <th>Catatan Pembayaran</th>
                                        <td class="uk-table-shrink">:</td>
                                        <td>Transfer via Maybank</td>
                                    </tr>
                                    <tr>
                                        <th>Tgl. SO</th>
                                        <td class="uk-table-shrink">:</td>
                                        <td>01 Juli 2023</td>
                                    </tr>
                                    <tr>
                                        <th>Kategori Retur</th>
                                        <td class="uk-table-shrink">:</td>
                                        <td>Barang tidak sesuai</td>
                                    </tr>
                                    <tr>
                                        <th>Deskripsi</th>
                                        <td class="uk-table-shrink">:</td>
                                        <td>Barang tidak sesuai</td>
                                    </tr>
                                    <tr>
                                        <th>Foto Produk Retur</th>
                                        <td>:</td>
                                        <td><a href="#modalReturDetail" uk-toggle>View</a></td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <table class="rz-table-vertical">
                                    <tr>
                                        <th class="uk-width-1-3">Bukti Transfer</th>
                                        <td class="uk-table-shrink">:</td>
                                        <td><a href="#modalReturDetail" uk-toggle>View</a></td>
                                    </tr>
                                    <tr>
                                        <th>Nota Retur</th>
                                        <td class="uk-table-shrink">:</td>
                                        <td><a href="#modalReturDetail" uk-toggle>View</a></td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td class="uk-table-shrink">:</td>
                                        <td>
                                            <select class="uk-select uk-form-small">
                                                <option>Draft</option>
                                                <option>On Check</option>
                                                <option>Tunggu Konfirmasi</option>
                                                <option>Dikirim</option>
                                                <option>Selesai</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Kirim</th>
                                        <td class="uk-table-shrink">:</td>
                                        <td><input type="date" class="uk-input uk-form-small"></td>
                                    </tr>
                                </table>

                            </div>


                        </div>
                        <div class="uk-overflow-auto uk-margin-medium-top">
                            <h4>Detail Barang</h4>
                            <table class="uk-table uk-table-small uk-table-striped rz-table-small-override">
                                <thead>
                                    <tr>
                                        <th>Kode Barang</th>
                                        <th>Lot Retur</th>
                                        <th>Nama Barang</th>
                                        <th>Qty Retur (Roll)</th>
                                        <th>Qty Retur (Kg)</th>
                                        <th>Total Retur</th>
                                        <th>Lot Pengganti</th>
                                        <th>Qty Ganti (Roll)</th>
                                        <th>Qty Ganti (Kg)</th>
                                        <th>Total Pengganti</th>
                                        <th>Tagihan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>BJA57.HJU007.2304<br></td>
                                        <td>123123</td>
                                        <td>SK.CM.245. HIJAU TN<br></td>
                                        <td>1</td>
                                        <td>25</td>
                                        <td>2,500,000</td>
                                        <td><input type="number" class="uk-input uk-form-small"></td>
                                        <td><input type="number" class="uk-input uk-form-small"></td>
                                        <td><input type="number" class="uk-input uk-form-small"></td>
                                        <td>2,600,000</td>
                                        <td>100,000</td>
                                    </tr>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="9"></td>
                                        <td>Ongkir</td>
                                        <td><input type="number" class="uk-input uk-form-small"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="9"></td>
                                        <td>Total</td>
                                        <td><input type="number" class="uk-input uk-form-small"></td>
                                    </tr>
                                </tfoot>

                            </table>
                        </div>
                        <div class="uk-margin uk-width-1-3@s">
                            <label>Catatan Admin</label>
                            <textarea rows="3" class="uk-textarea"></textarea>
                        </div>
                        <div class="uk-margin-medium-top uk-text-right">
                            <a href="" class="uk-button uk-button-primary uk-margin-small-right">Submit</a>
                        </div>


                    </div>
                </div>

            </div>




        </div>
    </main>

    <div id="modalReturDetail" class="uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

            <button class="uk-modal-close-default" type="button" uk-close></button>

            <div class="uk-child-width-1-2" uk-grid>
                <div>
                    <h5>Foto Produk Retur</h5>
                    <img src="img/sample-retur.jpeg" alt="">
                </div>

            </div>

        </div>
    </div>
</x-app-layout>
