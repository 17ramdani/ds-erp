<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Sales &amp; Marketing</h3>
                </div>

                <div class="">

                    <div class="rz-panel">
                        <h4>Tambah Pesanan</h4>
                        <div class="uk-child-width-1-2@s uk-grid-large" uk-grid>
                            <div>
                                <form class="uk-form-stacked">

                                    <div class="uk-margin">
                                        <label class="uk-form-label">No Faktur</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" type="text">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label">Invoice Date</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" type="date">
                                        </div>
                                    </div>

                                    <div class="uk-margin">
                                        <label class="uk-form-label">Customer</label>
                                        <div class="uk-form-controls">
                                            <select class="uk-select">
                                                <option>--Pilih Customer--</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label">CS</label>
                                        <div class="uk-form-controls">
                                            <select class="uk-select">
                                                <option>--Pilih CS--</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label">Kategori Pesanan</label>
                                        <div class="uk-form-controls">
                                            <select class="uk-select">
                                                <option>--Pilih Kategori Pesanan--</option>
                                            </select>
                                        </div>
                                    </div>

                                </form>
                            </div>
                            <div>
                                <form class="uk-form-stacked">

                                    <div class="uk-margin">
                                        <label class="uk-form-label">Jenis Kain</label>
                                        <div class="uk-form-controls">
                                            <select class="uk-select">
                                                <option>--Pilih Jenis Kain--</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label">Tipe Kain</label>
                                        <div class="uk-form-controls">
                                            <select class="uk-select">
                                                <option>--Pilih Tipe Kain--</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label">Sales</label>
                                        <div class="uk-form-controls">
                                            <select class="uk-select">
                                                <option>--Pilih Sales--</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label">Jenis Pesanan</label>
                                        <div class="uk-form-controls">
                                            <select class="uk-select">
                                                <option>--Pilih Jenis Pesanan--</option>
                                            </select>
                                        </div>
                                    </div>

                                </form>
                            </div>


                        </div>
                        <div class="uk-overflow-auto uk-margin-medium-top">


                            <table class="uk-table uk-table-small uk-table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jenis Barang</th>
                                        <th>L/GSM</th>
                                        <th>Warna</th>
                                        <th>Lot</th>
                                        <th>Kode Roll</th>
                                        <th>Qty</th>
                                        <th>Satuan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <select class="uk-select">
                                                <option>SK.CARDED 24S</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="uk-select">
                                                <option>42 / 170-180</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="uk-select">
                                                <option>Hitam Reaktif</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="text" class="uk-input">
                                        </td>
                                        <td>
                                            <input type="text" class="uk-input">
                                        </td>
                                        <td>
                                            <input type="number" class="uk-input">
                                        </td>
                                        <td>
                                            <select class="uk-select">
                                                <option>Kg</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <select class="uk-select">
                                                <option>SK.CARDED 24S</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="uk-select">
                                                <option>42 / 170-180</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="uk-select">
                                                <option>Hitam Reaktif</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="text" class="uk-input">
                                        </td>
                                        <td>
                                            <input type="text" class="uk-input">
                                        </td>
                                        <td>
                                            <input type="number" class="uk-input">
                                        </td>
                                        <td>
                                            <select class="uk-select">
                                                <option>Kg</option>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="6"></td>
                                        <td>Total</td>
                                        <td class="uk-text-right">2,220,000</td>
                                    </tr>
                                    <tr>
                                        <td colspan="6"></td>
                                        <td>PPN 11%</td>
                                        <td class="uk-text-right">500,000</td>
                                    </tr>
                                    <tr>
                                        <td colspan="6"></td>
                                        <td>DP</td>
                                        <td class="uk-text-right">500,000</td>
                                    </tr>
                                    <tr>
                                        <td colspan="6"></td>
                                        <td>Grand Total</td>
                                        <td class="uk-text-right">1,720,000</td>
                                    </tr>
                                </tfoot>
                            </table>



                        </div>
                        <div class="uk-margin-medium">
                            <a href="" class="uk-button uk-border-rounded uk-margin-small-right uk-button-default">Simpan</a>
                            <a href="mod-sm-pesanan-index.php" class="uk-button uk-border-rounded uk-button-primary">Submit</a>
                        </div>
                    </div>
                </div>

            </div>




        </div>
    </main>
</x-app-layout>
