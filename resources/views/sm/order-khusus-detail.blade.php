<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Sales &amp; Marketing</h3>
                </div>

                <div class="">

                    <div class="rz-panel">
                        <h4>Detail Pesanan Khusus</h4>
                        <div class="uk-child-width-1-2@s uk-grid-large" uk-grid>
                            <div>
                                <table class="rz-table-vertical">
                                    <tr>
                                        <th>No. Invoice</th>
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
                                        <td>Syarif</td>
                                    </tr>
                                    <tr>
                                        <th>Catatan Pembayaran</th>
                                        <td>:</td>
                                        <td>Transfer BCA</td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <table class="rz-table-vertical">
                                    <tr>
                                        <th>Jatuh Tempo</th>
                                        <td class="uk-table-shrink">:</td>
                                        <td>Feb 25, 2023</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td class="uk-table-shrink">:</td>
                                        <td>
                                            <select class="uk-select uk-form-small">
                                                <option>Draft</option>
                                                <option>Approved</option>
                                                <option>Invoicing</option>
                                                <option>Delivered</option>
                                                <option>LO</option>
                                                <option>Done</option>
                                            </select>
                                        </td>
                                    </tr>

                                </table>
                            </div>


                        </div>
                        <div class="uk-overflow-auto uk-margin-medium-top">
                            <h4>Detail Barang</h4>
                            <table class="uk-table uk-table-small uk-table-striped">
                                <thead>
                                    <tr>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Grm</th>
                                        <th>Lbr</th>
                                        <th>Warna</th>
                                        <th>Qty Est.</th>
                                        <th>Qty Act.</th>
                                        <th>Stn</th>
                                        <th>Harga</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody class="uk-text-small">
                                    <tr>
                                        <td>ABC</td>
                                        <td>SK.CARDED 24'S</td>
                                        <td>42" /150-160</td>
                                        <td>10</td>
                                        <td>PUTIH</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>Roll
                                        </td>
                                        <td>2,000,000</td>
                                        <td>2,000,000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="8"></td>
                                        <td>Total</td>
                                        <td class="uk-text-right">2,000,000</td>
                                    </tr>
                                    <tr>
                                        <td colspan="8"></td>
                                        <td>PPN (11%)</td>
                                        <td class="uk-text-right">220,000</td>
                                    </tr>
                                    <tr>
                                        <td colspan="8"></td>
                                        <td>DP</td>
                                        <td class="uk-text-right">500,000</td>
                                    </tr>
                                    <tr>
                                        <td colspan="8"></td>
                                        <td>Grand Total</td>
                                        <td class="uk-text-right">1,720,000</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="uk-margin-medium">
                            <a href="" class="uk-button uk-border-rounded uk-margin-small-right uk-button-default">Simpan</a>
                            <a href="mod-sm-pesanan-index.php" class="uk-button uk-border-rounded uk-button-primary">Create Invoice</a>
                        </div>
                    </div>
                </div>

            </div>




        </div>
    </main>
</x-app-layout>
