<x-app-layout>
    <style>
        .jenis_disc{
            pointer-events: none;
            opacity: 0.4;
        }
    </style>
        <main id="mainContent">

            <div class="rz-bodyContent">
                <div class="rz-container">
                    <div>
                        <h3>Sales &amp; Marketing</h3>
                    </div>

                    <div class="">
                        <x-alert />
                        <form action="{{ route('order.draft.update', $pesanan['id']) }}" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="rz-panel">
                                <h4>Detail Pesanan</h4>
                                <div class="uk-child-width-1-2@s uk-grid-large" uk-grid>
                                    <div>
                                        <table class="rz-table-vertical">
                                            <tr>
                                                <th>No. Pesanan</th>
                                                <td class="uk-table-shrink">:</td>
                                                <td>{{ $pesanan['nomor'] }}</td>
                                            </tr>
                                            <tr>
                                                <th>Customer</th>
                                                <td class="uk-table-shrink">:</td>
                                                <td>{{ $pesanan['customer']['nama'] }}</td>
                                            </tr>
                                            <tr>
                                                <th>Sales</th>
                                                <td class="uk-table-shrink">:</td>
                                                <td>
                                                    <select name="sales" class="uk-select uk-form-small">
                                                        <option value="0">-select-</option>
                                                        @foreach ($salesmans as $xx)
                                                            <option value="{{ $xx->id }}"
                                                                {{ $pesanan['sales_man_id'] == $xx->id ? 'selected' : '' }}>
                                                                {{ $xx->nama }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Catatan Pembayaran</th>
                                                <td>:</td>
                                                <td>-</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div>
                                        <table class="rz-table-vertical">
                                            <tr>
                                                <th>Target Kirim</th>
                                                <td class="uk-table-shrink">:</td>
                                                <td><input type="date" name="target_kirim" id="target_kirim"
                                                        value="{{ $pesanan['jatuh_tempo'] }}" class="uk-input"></td>
                                            </tr>
                                            <tr>
                                                <th>Status</th>
                                                <td class="uk-table-shrink">:</td>
                                                <td>
                                                    <select name="status" class="uk-select uk-form-small" {{ $pesanan['status_pesanan_id'] == '1' ? '' : '' }}>
                                                        <option value="Draft" {{ $pesanan['status_kode'] == 'Draft' ? 'selected' : '' }}
                                                            {{ $pesanan['status_kode'] == 'Approved' ? 'hidden' : '' }}
                                                            {{ $pesanan['status_kode'] == 'Invoicing' ? 'hidden' : '' }}
                                                            {{ $pesanan['status_kode'] == 'Delivery' ? 'hidden' : '' }}>
                                                            Draft
                                                        </option>
                                                        <option value="Approved"
                                                            {{ $pesanan['status_kode'] == 'Approved' ? 'selected' : '' }}
                                                            {{ $pesanan['status_kode'] == 'Invoicing' ? 'hidden' : '' }}
                                                            {{ $pesanan['status_kode'] == 'Delivery' ? 'hidden' : '' }}>
                                                            Approved</option>
                                                        <option value="Invoicing"
                                                            {{ $pesanan['status_kode'] == 'Invoicing' ? 'selected' : '' }}
                                                            {{ $pesanan['status_kode'] == 'Delivery' ? 'hidden' : '' }}>
                                                            Invoicing</option>
                                                        <option value="Delivery"
                                                            {{ $pesanan['status_kode'] == 'Delivery' ? 'selected' : '' }}>
                                                            Delivered</option>
                                                        <option value="LO" {{ $pesanan['status_kode'] == 'LO' ? 'selected' : '' }}>LO
                                                        </option>
                                                        <option value="Done" {{ $pesanan['status_kode'] == 'Done' ? 'selected' : '' }}>
                                                            Done
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Tipe Pesanan</th>
                                                <td class="uk-table-shrink">:</td>
                                                <td>
                                                    <select name="tipe_pesanan" id="target"
                                                        class="uk-select uk-form-small">
                                                        <option value="">--Pilih--</option>
                                                        <option
                                                            {{ $pesanan['tipe_pesanan'] == 'Retail' ? 'selected' : '' }}>
                                                            Retail</option>
                                                        <option
                                                            {{ $pesanan['tipe_pesanan'] == 'Fresh Order' ? 'selected' : '' }}>
                                                            Fresh Order</option>
                                                        <option
                                                            {{ $pesanan['tipe_pesanan'] == 'Development' ? 'selected' : '' }}>
                                                            Development</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Jenis Pesanan</th>
                                                <td class="uk-table-shrink">:</td>
                                                <td>
                                                    <select name="jenis_pesanan" id="jenis_pesanan" class="uk-select uk-form-small" onChange="catPesanan(this)">
                                                        <option>--Pilih--</option>
                                                        <option value="Reguler"
                                                            {{ $pesanan['jenis_pesanan'] == 'Reguler' ? 'selected' : '' }}>
                                                            Reguler</option>
                                                        <option value="Khusus"
                                                            {{ $pesanan['jenis_pesanan'] == 'Khusus' ? 'selected' : '' }}>
                                                            Khusus</option>
                                                        <option value="Promo"
                                                            {{ $pesanan['jenis_pesanan'] == 'Promo' ? 'selected' : '' }}>
                                                            Promo</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Kategori Pesanan</th>
                                                <td class="uk-table-shrink">:</td>
                                                <td>
                                                    <select name="kategori_pesanan" class="uk-select uk-form-small" id="kategori_pesanan">
                                                        <option>--Pilih--</option>
                                                        <option value="Normal"
                                                            {{ $pesanan['kategori_pesanan'] == 'Normal' ? 'selected' : '' }}>
                                                            Normal</option>
                                                        <option value="Booking Stock"
                                                            {{ $pesanan['kategori_pesanan'] == 'Booking Stock' ? 'selected' : '' }}>
                                                            Booking Stock</option>
                                                        <option value="Advance Booking"
                                                            {{ $pesanan['kategori_pesanan'] == 'Advance Booking' ? 'selected' : '' }}>
                                                            Advance Booking</option>
                                                    </select>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                @php
                                if($pesanan['tipe_pesanan'] == "Retail"){
                                    $show_table_retail = "block";
                                    $show_table_fo_dev = "none";
                                }elseif($pesanan['tipe_pesanan'] == "Fresh Order" or $pesanan['tipe_pesanan'] == "Development"){
                                    $show_table_retail = "none";
                                    $show_table_fo_dev = "block";
                                }else{
                                    $show_table_retail = "none";
                                    $show_table_fo_dev = "none";
                                }
                                if($pesanan['jenis_pesanan'] == "Reguler"){
                                    $dis_disabled = "jenis_disc";
                                }else{
                                    $dis_disabled = "";
                                }
                                @endphp
                                <div class="uk-overflow-auto uk-margin-medium-top">
                                    <div id="fo_dev" class="uk-margin inv {{ $show_table_fo_dev }}">
                                        <h4>Detail Barang (Fresh Order / Development)</h4>
                                        <table class="uk-table uk-table-small uk-table-striped" style="white-space: nowrap;overflow-x: auto;margin: 0 auto;">
                                            <thead>
                                                <tr>
                                                    <th>Lot&emsp;&emsp;&emsp;</th>
                                                    {{-- <th>Kode Barang</th> --}}
                                                    <th>Nama Barang</th>
                                                    <th>Grm</th>
                                                    <th>Lbr</th>
                                                    <th>Warna</th>
                                                    <th>Kat Warna</th>
                                                    <th>Jenis Barang.</th>
                                                    <th>Qty Est.</th>
                                                    <th>Stn&emsp;&emsp;</th>
                                                    <th>Qty Act (KG).</th>
                                                    <th>Harga&emsp;&emsp;&emsp;</th>
                                                    <th>Jenis Disc</th>
                                                    <th>Total Disc</th>
                                                    <th>Total&emsp;&emsp;&emsp;</th>
                                                </tr>
                                            </thead>
                                            <tbody class="uk-text-small">
                                                @php
                                                    $total = 0;
                                                    $dp = $pesanan['dp'] ?? 0;
                                                @endphp
                                                @foreach ($pesanan['details'] as $i => $detail)
                                                @php
                                                    if($detail['satuan'] == "ROLL"){
                                                        $dharga = $detail['tipe_kain']['harga_roll'];
                                                    }else{
                                                        $dharga = $detail['tipe_kain']['harga_ecer'];
                                                    }

                                                    if($detail['qty_act'] >= 1){

                                                        if($detail['satuan'] == "KG"){
                                                            $subtotal1  = $detail['qty_act'] * $dharga;
                                                        }elseif($detail['satuan'] == "ROLL"){
                                                            $subtotal1  = $detail['qty_act'] * 25 * $dharga;
                                                        }elseif($detail['satuan'] == "LOT"){
                                                            $subtotal1  = $detail['qty_act'] * (12 * 25) * $dharga;
                                                        }else{
                                                            $subtotal1  = $detail['qty_act'] * $dharga;
                                                        }
                                                        // echo 1;
                                                        $subtotal   = $subtotal1 - ($subtotal1 * $detail['total_disc'] / 100);
                                                        $total += $subtotal;
                                                        $jum_qty = $detail['qty_act'];

                                                    }else{

                                                    // QTY ACT = QTY EST * Satuan
                                                        if($detail['satuan'] == "KG"){
                                                            $qtactt  = $detail['qty'];
                                                        }elseif($detail['satuan'] == "ROLL"){
                                                            $qtactt  = $detail['qty'] * 25;
                                                        }elseif($detail['satuan'] == "LOT"){
                                                            $qtactt  = $detail['qty'] * (12 * 25);
                                                        }else{
                                                            $qtactt = $detail['qty'];
                                                        }



                                                        if($detail['satuan'] == "KG"){
                                                            $subtotal  = $detail['qty'] * $dharga;
                                                        }elseif($detail['satuan'] == "ROLL"){
                                                            $subtotal  = $detail['qty'] * 25 * $dharga;
                                                        }elseif($detail['satuan'] == "LOT"){
                                                            $subtotal  = $detail['qty'] * (12 * 25) * $dharga;
                                                        }else{
                                                            $subtotal = $detail['qty'] * $dharga;
                                                        }

                                                        $total += $subtotal;
                                                        $jum_qty = $qtactt;


                                                    }
                                                @endphp
                                                <tr>
                                                    <td><input type="text" name="fo_lot[]" class="uk-input" value="{{ $detail['barang_lot_id'] }}"></td>
                                                    {{-- <td>{{ $detail['tipe_kain']['kode'] }}</td> --}}
                                                    <td>{{ $detail['tipe_kain']['nama'] }}
                                                        <input type="hidden" name="fo_detail_id[]"
                                                        value="{{ $detail['id'] }}"></td>
                                                    <td>{{ $detail['tipe_kain']['gramasi']['nama'] }}</td>
                                                    <td>{{ $detail['tipe_kain']['lebar']['keterangan'] }}</td>
                                                    <td>
                                                        {{ $detail['tipe_kain']['warna']['nama'] }}
                                                        {{-- <select name="retail_warna[]" class="uk-select" id="warna_id_retail">
                                                            <option value="">--PILIH--</option>
                                                            <option value="{{ $detail['tipe_kain']['warna']['nama'] }}">{{ $detail['tipe_kain']['warna']['nama'] }}</option>
                                                        </select>  --}}
                                                    </td>
                                                    <td>{{ $detail['tipe_kain']['kategori_warna']['nama'] }}</td>
                                                    <td>
                                                        <div class="uk-margin">
                                                            <select class="uk-select" name="jenis_barang_fo[]" aria-label="Select">
                                                                <option value="Stok" {{ $detail['jenis_barang'] == 'Stok' ? 'selected' : '' }}>Stok</option>
                                                                <option value="Fresh Order" {{ $detail['jenis_barang'] == 'Fresh Order' ? 'selected' : '' }}>Fresh Order</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td><input name="fo_qty1[]" id="qty1-{{ $i }}"
                                                        type="number" step="0.01" value="{{ $detail['qty'] }}"
                                                        class="uk-input" readonly></td>
                                                    {{-- <td>
                                                        <select name="" id="" class="uk-select">
                                                            <option>Pcs</option>
                                                            <option>Roll</option>
                                                        </select>
                                                    </td> --}}
                                                    <td>
                                                        <select name="fo_satuan[]" id="satuan-{{ $i }}-{{ $detail['tipe_kain']['kode'] }}"
                                                            class="uk-select" onchange="selectSatuan(this)">
                                                            @foreach ($satuans as $satuan)
                                                                <option
                                                                    {{ $detail['satuan'] == $satuan->keterangan ? 'selected' : '' }}>
                                                                    {{ $satuan->keterangan }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td><input name="fo_qty2[]" id="qty2-{{ $i }}-{{ $detail['tipe_kain']['kode'] }}" onkeyup="hitungQtyFoDev(this)"
                                                        type="number" step="0.01" value="{{ $jum_qty }}"
                                                        class="uk-input">
                                                    </td>
                                                    <td><input type="number" name="fo_harga[]"
                                                            id="harga-{{ $i }}-{{ $detail['tipe_kain']['kode'] }}"
                                                            value="{{ $dharga }}" onkeyup="hitungSubTotal(this)"
                                                            class="uk-input">
                                                    </td>
                                                    <td>
                                                        <select name="fo_jenis_disc[]" id="jenis_disc-{{ $i }}" class="uk-select jenis_diskon {{ $dis_disabled }}">
                                                            <option value="Persen" {{ $detail['jenis_disc'] == 'Persen' ? 'selected' : '' }}>Persen</option>
                                                            <option value="Nominal" {{ $detail['jenis_disc'] == 'Persen' ? 'selected' : '' }}>Nominal</option>
                                                        </select>
                                                    </td>
                                                    <td><input type="number" name="fo_tot_disc[]" value="{{ $detail['total_disc'] }}" id="{{ $detail['id'] }}-{{ $subtotal }}-{{ $i }}" onkeyup="hitungDiskon(this)" class="uk-input tot_discx {{ $dis_disabled }}"></td>
                                                    <td>
                                                        <input type="hidden" name="fo_total_disc_hidden[]"
                                                        id="hiddensubtotal_fo_dev-{{ $i }}" class="uk-input"
                                                        value="{{ $subtotal }}">
                                                        <input type="number" name="fo_subtotal[]"
                                                        id="subtotal_fo_dev-{{ $i }}" class="uk-input form-hitung"
                                                        value="{{ $subtotal }}">
                                                    </td>
                                                </tr>
                                                @endforeach
                                                <tr>
                                                    {{-- <td></td> --}}
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
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    {{-- <td></td> --}}
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
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="11"></td>
                                                    <td>Total</td>
                                                    <td class="uk-text-right">
                                                        <input type="hidden" name="total_fo" id="total_fov" value="{{ $total }}">
                                                        <span id="total_fos">{{ number_format($total) }}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="11"></td>
                                                    <td>DP</td>
                                                    <td class="uk-text-right">
                                                        {{-- {{ number_format($dp) }} --}}
                                                    {{-- <input type="hidden" name="dp_fo" id="dp_fo" value="{{ $dp }}"> --}}
                                                    <div class="uk-margin">
                                                        <input class="uk-input uk-form-width-small" name="dp_fo" id="dp_fo" onkeyup="hitungDp(this)" type="text" value="{{ $dp }}">
                                                    </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="11"></td>
                                                    <td>Grand Total</td>
                                                    <td class="uk-text-right">
                                                        @php
                                                            $gt = $total - $dp;
                                                        @endphp
                                                        <input type="hidden" name="grandtotalfo" id="grand_tot_fov" value="{{ $gt }}">
                                                        <span id="grand_tot_fos">{{ number_format($gt) }}</span>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <div class="uk-margin-medium"><a href="mod-sm-pesanan-draft-cekStok.php"
                                                class="uk-button uk-button-default uk-border-rounded"><span
                                                    class="uk-margin-small-right" uk-icon="search"></span>Cek
                                                Stok</a></div>
                                    </div>
                                    <div id="retail" class="uk-margin vis">
                                        <h4>Detail Barang (Stok)</h4>
                                        <table class="uk-table uk-table-small uk-table-striped" style="white-space: nowrap;overflow-x: auto;margin: 0 auto;">
                                            <thead>
                                                <tr>
                                                    <th>LOT&emsp;&emsp;&emsp;</th>
                                                    {{-- <th>Kode Barang</th> --}}
                                                    <th>Nama Barang</th>
                                                    <th>Grm</th>
                                                    <th>Lbr</th>
                                                    <th>Warna&emsp;&emsp;&emsp;</th>
                                                    <th>Kat Warna</th>
                                                    <th>Qty Est.&emsp;&emsp;</th>
                                                    <th>Qty Act.&emsp;&emsp;</th>
                                                    <th>Stn&emsp;&emsp;&emsp;</th>
                                                    <th>Harga&emsp;&emsp;&emsp;</th>
                                                    <th>Jenis Disc</th>
                                                    <th>Total Disc</th>
                                                    <th>Total&emsp;&emsp;&emsp;</th>
                                                </tr>
                                            </thead>
                                            <tbody class="uk-text-small">
                                                @php
                                                    $total = 0;
                                                    $dp = $pesanan['dp'] ?? 0;
                                                @endphp
                                                @foreach ($pesanan['details'] as $i => $detail)
                                                    @php
                                                        if($detail['satuan'] == "KG"){
                                                            $dharga = $detail['tipe_kain']['harga_ecer'];
                                                        }else{
                                                            $dharga = $detail['tipe_kain']['harga_roll'];
                                                        }

                                                        if($detail['qty_act'] >= 1){

                                                            if($detail['satuan'] == "KG"){
                                                                $subtotal1  = $detail['qty_act'] * $dharga;
                                                            }elseif($detail['satuan'] == "ROLL"){
                                                                $subtotal1  = $detail['qty_act'] * 25 * $dharga;
                                                            }elseif($detail['satuan'] == "LOT"){
                                                                $subtotal1  = $detail['qty_act'] * (12 * 25) * $dharga;
                                                            }else{
                                                                $subtotal1  = $detail['qty_act'] * $dharga;
                                                            }

                                                            $subtotal   = $subtotal1 - ($subtotal1 * $detail['total_disc'] / 100);
                                                            $total += $subtotal;
                                                            $jum_qty = $detail['qty_act'];

                                                        }else{
                                                            if($detail['satuan'] == "KG"){
                                                                $subtotal  = $detail['qty'] * $dharga;
                                                            }elseif($detail['satuan'] == "ROLL"){
                                                                $subtotal  = $detail['qty'] * 25 * $dharga;
                                                            }elseif($detail['satuan'] == "LOT"){
                                                                $subtotal  = $detail['qty'] * (12 * 25) * $dharga;
                                                            }else{
                                                                $subtotal = $detail['qty'] * $dharga;
                                                            }

                                                            $total += $subtotal;
                                                            $jum_qty = $detail['qty'];
                                                        }
                                                    @endphp
                                                    <tr>
                                                        <td>
                                                            <input type="text" name="retail_lot[]" class="uk-input" value="{{ $detail['barang_lot_id'] }}"></td>
                                                        <input type="hidden" name="retail_detail_id[]" value="{{ $detail['id'] }}">
                                                        {{-- <td>{{ $detail['tipe_kain']['kode'] }}</td> --}}
                                                        <td>{{ $detail['tipe_kain']['nama'] }}</td>
                                                        <td>{{ $detail['tipe_kain']['gramasi']['nama'] }}</td>
                                                        <td>{{ $detail['tipe_kain']['lebar']['keterangan'] }}</td>
                                                        <td>
                                                            {{ $detail['tipe_kain']['warna']['nama'] }}
                                                            {{-- <select name="fov_warna[]" class="uk-select" id="warna_id_fov">
                                                                <option value="">--PILIH--</option>
                                                                <option value="{{ $detail['tipe_kain']['warna']['nama'] }}">{{ $detail['tipe_kain']['warna']['nama'] }}</option>
                                                            </select>  --}}
                                                        </td>
                                                        <td>{{ $detail['tipe_kain']['kategori_warna']['nama'] }}</td>
                                                        <td>
                                                            @php
                                                            if($detail['bagian'] === 'body'){
                                                            @endphp

                                                            <input name="retail_qty1[]" id="qtyretail1-{{ $i }}"
                                                                type="number" step="0.01" value="{{ $detail['qty'] }}"
                                                                class="uk-input" readonly>

                                                            @php
                                                            }else{
                                                                echo 1;
                                                            }
                                                            @endphp

                                                        </td>
                                                        <td><input name="retail_qty2[]" id="qtyretail2-{{ $i }}-{{ $detail['tipe_kain']['kode'] }}" onkeyup="hitungQtyRetail(this)"
                                                                type="number" step="0.01" value="{{ $jum_qty }}"
                                                                class="uk-input"></td>
                                                        <td>
                                                            <select name="retail_satuan[]" id="satuanretail-{{ $i }}-{{ $detail['tipe_kain']['kode'] }}"
                                                                class="uk-select" onchange="selectSatuanRetail(this)">
                                                                @foreach ($satuans as $satuan)
                                                                    <option
                                                                        {{ $detail['satuan'] == $satuan->keterangan ? 'selected' : '' }}>
                                                                        {{ $satuan->keterangan }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td><input type="number" name="retail_harga[]"
                                                            id="hargaretail-{{ $i }}-{{ $detail['tipe_kain']['kode'] }}" onkeyup="hitungSubTotalRetail(this)"
                                                            value="{{ $dharga }}"
                                                            class="uk-input">
                                                        </td>
                                                        <td>
                                                            <select name="retail_jenis_disc[]" id="retailjenis_disc-{{ $i }}" class="uk-select jenis_diskon {{ $dis_disabled }}">
                                                                <option value="Persen" {{ $detail['jenis_disc'] == 'Persen' ? 'selected' : '' }}>Persen</option>
                                                                <option value="Nominal" {{ $detail['jenis_disc'] == 'Nominal' ? 'selected' : '' }}>Nominal</option>
                                                            </select>
                                                        </td>
                                                        <td><input type="number" name="retail_tot_disc[]" value="{{ $detail['total_disc'] }}" id="retail-{{ $detail['id'] }}-{{ $subtotal }}-{{ $i }}" onkeyup="hitungDiskonRetail(this)" class="uk-input tot_discx {{ $dis_disabled }}"></td>

                                                        <td>
                                                            <input type="hidden" name="subtotal[]"
                                                                id="hiddensubtotal_retail-{{ $i }}" class="uk-input"
                                                                value="{{ $subtotal }}">
                                                            <input type="number" name="subtotal[]"
                                                                id="subtotalretail-{{ $i }}" class="uk-input form-hitung-retail"
                                                                value="{{ $subtotal }}">
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                <tr>
                                                    {{-- <td></td> --}}
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
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="10"></td>
                                                    <td>Total</td>
                                                    <td class="uk-text-right">
                                                        <input type="hidden" name="total_stok" id="total_stok" value="{{ $total }}">
                                                        <span id="view_total_stok">{{ number_format($total) }}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="10"></td>
                                                    <td>DP</td>
                                                    <td class="uk-text-right">
                                                        {{-- {{ number_format($dp) }} --}}
                                                        <input class="uk-input uk-form-width-small" name="dp_stok" id="dp_stok" onkeyup="hitungDpStok(this)" type="text" value="{{ $dp }}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="10"></td>
                                                    <td>Grand Total</td>
                                                    <td class="uk-text-right">
                                                        @php
                                                            $gt = $total - $dp;
                                                        @endphp
                                                        <input type="hidden" name="grandtotalstok" id="grand_tot_stok" value="{{ $gt }}">
                                                        <span id="grand_tot_sstok">{{ number_format($gt) }}</span>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>


                                </div>
                                <div class="uk-margin-medium">
                                    <button type="submit" name="button_save"
                                        class="uk-button uk-border-rounded uk-margin-small-right uk-button-default">Simpan</button>
                                    <button type="submit" name="button_submit"
                                        class="uk-button uk-border-rounded uk-button-primary">Submit</button>
                                    @if($pesanan['status_kode'] == 'Draft')

                                    @else
                                    <a href="{{ route('order.draft.cetak', $pesanan['id']) }}" name="button_cetak"
                                        class="uk-button uk-border-rounded uk-button-primary">Cetak</a>
                                    @endif

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>


        <script>

    function number_format(number, decimals, decPoint, thousandsSep) {
        number = (number + '').replace(/[^0-9+\-Ee.]/g, '')
        var n = !isFinite(+number) ? 0 : +number
        var prec = !isFinite(+decimals) ? 0 : Math.abs(decimals)
        var sep = (typeof thousandsSep === 'undefined') ? ',' : thousandsSep
        var dec = (typeof decPoint === 'undefined') ? '.' : decPoint
        var s = ''

        var toFixedFix = function(n, prec) {
            var k = Math.pow(10, prec)
            return '' + (Math.round(n * k) / k)
                .toFixed(prec)
        }

        // @todo: for IE parseFloat(0.55).toFixed(0) = 0;
        s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.')
        if (s[0].length > 3) {
            s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep)
        }
        if ((s[1] || '').length < prec) {
            s[1] = s[1] || ''
            s[1] += new Array(prec - s[1].length + 1).join('0')
        }

        return s.join(dec)
    }

            // GET HARGA
            function hitungSubTotal(elem){
                var id              = $(elem).attr("id");
                var pecah           = id.split("-");
                var name_id         = pecah[0];
                var index_id        = pecah[1];
                var kode_barang     = pecah[2];
                var harga           = document.getElementById(id).value;
                var qty             = document.getElementById('qty2-'+index_id+'-'+kode_barang).value;
                var satuan_brg      = document.getElementById('satuan-'+index_id+'-'+kode_barang).value;

                if(satuan_brg == "KG"){
                    var subtotal = qty * harga;
                }else if(satuan_brg == "ROLL"){
                    var subtotal = qty * 25 * harga;
                }else if(satuan_brg == "LOT"){
                    var subtotal = qty * (12 * 25) * harga;
                }else{
                    var subtotal = qty * harga;
                }

                // var subtotal        = qty * harga;
                if (!isNaN(subtotal)) {
                    $("#hiddensubtotal_fo_dev-"+index_id).val(subtotal);
                    $("#subtotal_fo_dev-"+index_id).val(subtotal);
                    hitungTotal();
                }
            }

            function hitungTotal(){
                var items = new Array();
                var itemCount = document.getElementsByClassName("form-hitung");
                var total = 0;
                var id = "";
                for(var i = 0; i < itemCount.length; i++){
                    id = 'subtotal_fo_dev-'+(i);
                    total = total + parseInt(document.getElementById(id).value);
                }
                $("#total_fov").val(total);
                $("#grand_tot_fov").val(total);
                document.getElementById('total_fos').innerHTML = total;
                document.getElementById('grand_tot_fos').innerHTML = total;
            }

            function selectSatuan(elem){
                var id              = $(elem).attr("id");
                var pecah           = id.split("-");
                var name_id         = pecah[0];
                var index_id        = pecah[1];
                var kode_barang     = pecah[2];
                var satuan_brg      = document.getElementById(id).value;

                $.ajax({
                        type: "GET",
                        url: "{{ url('/harga-by-satuan') }}/" + kode_barang,
                        data: {
                            kode_barang: kode_barang,
                            satuan_brg:satuan_brg,

                        },
                        dataType: "json",
                        success: function(response) {
                            if(satuan_brg === "ROLL"){
                                var hargna = response.data_tipe[0].harga_roll
                            }else{
                                var hargna = response.data_tipe[0].harga_ecer
                            }

                            $("#harga-"+index_id).val(hargna);
                            hitungHargaPerSatuan(hargna,kode_barang, index_id);
                            hitungTotal();
                        }
                    })
            }


            function hitungHargaPerSatuan(hargna,kode_barang, index){
                var qty  = document.getElementById('qty2-'+index+'-'+kode_barang).value;
                var satuan_brg      = document.getElementById('satuan-'+index+'-'+kode_barang).value;
                if(satuan_brg == "KG"){
                    var hasil = qty * hargna;
                }else if(satuan_brg == "ROLL"){
                    var hasil = qty * 25 * hargna;
                }else if(satuan_brg == "LOT"){
                    var hasil = qty * (12 * 25) * hargna;
                }else{
                    var hasil = qty * hargna;
                }
                $("#subtotal_fo_dev-"+index).val(hasil);
                $("#hiddensubtotal_fo_dev-"+index).val(hasil);
                hitungTotal();
            }


            function catPesanan(){
            var st = $("#jenis_pesanan").val();
                if(st == "Reguler"){
                    $('.jenis_diskon').addClass('jenis_disc');
                    $('.tot_discx').addClass('jenis_disc');

                } else {
                    $('.jenis_diskon').removeClass('jenis_disc');
                    $('.tot_discx').removeClass('jenis_disc');
                }


            }

            function hitungDiskon(elem) {
                var id              = $(elem).attr("id");
                var pecah           = id.split("-");
                var id_detailpesan  = pecah[0];
                // var harga_awal      = pecah[1];
                var id_td           = pecah[2];
                var vdisc           = document.getElementById(id).value;
                var jenis_disc      = document.getElementById('jenis_disc-'+id_td).value;
                var harga           = document.getElementById('hiddensubtotal_fo_dev-'+id_td).value;
                var harga_awal      = document.getElementById('subtotal_fo_dev-'+id_td).value;

                if(jenis_disc === "Nominal"){
                    var result = parseInt(harga) - parseInt(vdisc);
                }else{
                    var result = harga - (harga * vdisc / 100);
                }
                if (!isNaN(result)) {
                    $("#subtotal_fo_dev-" + id_td).val(result);
                    $("#total_fov").val(result);
                    hitungTotal();
                }
            }

            function hitungDp(){
                var total = document.getElementById('total_fov').value;
                var dp    = document.getElementById('dp_fo').value;

                var result = parseInt(total) - parseInt(dp);
                if (!isNaN(result)) {
                    $("#grand_tot_fov").val(result);
                    document.getElementById('grand_tot_fos').innerHTML = result;
                }
            }

            document.getElementById("retail").style.display = "{{ $show_table_retail }}";
            document.getElementById("fo_dev").style.display = "{{ $show_table_fo_dev }}";
            document.getElementById('target').addEventListener('change', function() {
                    'use strict';
                    var target = this.value;
                    if (target === "Retail") {
                        // document.getElementById('retail').className = 'vis';
                        // document.getElementById('fo_dev').className = 'inv';
                        document.getElementById("retail").style.display = "block";
                        document.getElementById("fo_dev").style.display = "none";
                        // alert('Retail Table')
                    } else if(target === "Fresh Order" || target === "Development") {
                        // document.getElementById('retail').className = 'inv';
                        // document.getElementById('fo_dev').className = 'vis';
                        document.getElementById("fo_dev").style.display = "block";
                        document.getElementById("retail").style.display = "none";
                        // alert('Fresh Order Table')
                    }else{
                        document.getElementById("retail").style.display = "none";
                        document.getElementById("fo_dev").style.display = "none";
                    }
                });

            function hitungQtyFoDev(elem){
                var id              = $(elem).attr("id");
                var pecah           = id.split("-");
                var name_id         = pecah[0];
                var index_id        = pecah[1];
                var tipe_kain_id    = pecah[2];
                var qty_retail      = document.getElementById(id).value;
                var hrg_retail      = document.getElementById('harga-'+index_id+'-'+tipe_kain_id).value;
                var satuan          = document.getElementById('satuan-'+index_id+'-'+tipe_kain_id).value;

                if(satuan == "KG"){
                    var result = qty_retail * parseInt(hrg_retail);
                }else if(satuan == "ROLL"){
                    var result  = qty_retail * hrg_retail;
                }else if(satuan == "LOT"){
                    var result  = qty_retail * (12 * 25) * hrg_retail;
                }else{
                    var result = qty_retail * parseInt(hrg_retail);
                }

                if (!isNaN(result)) {
                    $("#hiddensubtotal_fo_dev-"+index_id).val(result);
                    $("#subtotal_fo_dev-"+index_id).val(result);
                    $("#total_fov").val(result);
                    document.getElementById('total_fos').innerHTML = result;
                    $("#grandtotalfo").val(result);
                    document.getElementById('grand_tot_fos').innerHTML = result;
                }
            }
        </script>
        {{-- Retail --}}
        <script>
            function hitungDiskonRetail(elem){
                var id              = $(elem).attr("id");
                var pecah           = id.split("-");
                var nama_jdisc      = pecah[0];
                var id_detailpesan  = pecah[1];
                var h               = pecah[2];
                // var harga_awal      = pecah[1];
                var id_td           = pecah[3];
                var vdisc           = document.getElementById(id).value;
                var jenis_disc      = document.getElementById('retailjenis_disc-'+id_td).value;
                var harga           = document.getElementById('hiddensubtotal_retail-'+id_td).value;
                // var harga_awal      = document.getElementById('subtotal_fo_dev-'+id_td).value;

                if(jenis_disc === "Nominal"){
                    var result = parseInt(harga) - parseInt(vdisc);
                }else{
                    var result = harga - (harga * vdisc / 100);
                }
                if (!isNaN(result)) {
                    $("#subtotalretail-" + id_td).val(result);
                    $("#total_stok").val(result);
                    hitungTotalRetail();
                }
            }

            function hitungQtyRetail(elem){
                var id              = $(elem).attr("id");
                var pecah           = id.split("-");
                var name_id         = pecah[0];
                var index_id        = pecah[1];
                var tipe_kain_id    = pecah[2];
                var qty_retail      = document.getElementById(id).value;
                var hrg_retail      = document.getElementById('hargaretail-'+index_id+'-'+tipe_kain_id).value;
                var satuan          = document.getElementById('satuanretail-'+index_id+'-'+tipe_kain_id).value;

                if(satuan == "KG"){
                    var result = qty_retail * parseInt(hrg_retail);
                }else if(satuan == "ROLL"){
                    var result  = qty_retail * 25 * hrg_retail;
                }else if(satuan == "LOT"){
                    var result  = qty_retail * (12 * 25) * hrg_retail;
                }else{
                    var result = qty_retail * parseInt(hrg_retail);
                }

                if (!isNaN(result)) {
                    $("#hiddensubtotal_retail-"+index_id).val(result);
                    $("#subtotalretail-"+index_id).val(result);
                    $("#total_stok").val(result);
                    document.getElementById('view_total_stok').innerHTML = result;
                    $("#grand_tot_stok").val(result);
                    document.getElementById('grand_tot_sstok').innerHTML = result;
                    hitungTotalRetail();
                }
            }

            function selectSatuanRetail(elem){
                var id              = $(elem).attr("id");
                var pecah           = id.split("-");
                var name_id         = pecah[0];
                var index_id        = pecah[1];
                var kode_barang     = pecah[2];
                var satuan_brg      = document.getElementById(id).value;

                $.ajax({
                        type: "GET",
                        url: "{{ url('/harga-by-satuan') }}/" + kode_barang,
                        data: {
                            kode_barang: kode_barang,
                            satuan_brg:satuan_brg,

                        },
                        dataType: "json",
                        success: function(response) {
                            // console.log(response)
                            if(satuan_brg === "KG"){
                                var hargna = response.data_tipe[0].harga_ecer
                            }else{
                                var hargna = response.data_tipe[0].harga_roll
                            }

                            $("#hargaretail-"+index_id+'-'+kode_barang).val(hargna);
                            hitungHargaPerSatuanRetail(hargna,kode_barang, index_id);
                            hitungTotalRetail();
                        }
                    })
            }

            function hitungHargaPerSatuanRetail(hargna,kode_barang, index){
                var qty             = document.getElementById('qtyretail2-'+index+'-'+kode_barang).value;
                var satuan_brg      = document.getElementById('satuanretail-'+index+'-'+kode_barang).value;

                if(satuan_brg == "KG"){
                    var hasil = qty * hargna;
                }else if(satuan_brg == "ROLL"){
                    var hasil = qty * 25 * hargna;
                }else if(satuan_brg == "LOT"){
                    var hasil = qty * (12 * 25) * hargna;
                }else{
                    var hasil = qty * hargna;
                }
                $("#subtotalretail-"+index).val(hasil);
                $("#hiddensubtotal_retail-"+index).val(hasil);
                hitungTotalRetail();
            }

            function hitungTotalRetail(){
                var items = new Array();
                var itemCount = document.getElementsByClassName("form-hitung-retail");
                var total = 0;
                var id = "";
                for(var i = 0; i < itemCount.length; i++){
                    id = 'subtotalretail-'+(i);
                    total = total + parseInt(document.getElementById(id).value);
                }
                $("#total_stok").val(total);
                $("#grand_tot_stok").val(total);
                document.getElementById('view_total_stok').innerHTML = total;
                document.getElementById('grand_tot_sstok').innerHTML = total;
            }

            function hitungSubTotalRetail(elem){
                var id              = $(elem).attr("id");
                var pecah           = id.split("-");
                var name_id         = pecah[0];
                var index_id        = pecah[1];
                var kode_barang     = pecah[2];
                var harga           = document.getElementById(id).value;
                var qty             = document.getElementById('qtyretail2-'+index_id+'-'+kode_barang).value;
                var satuan_brg      = document.getElementById('satuanretail-'+index_id+'-'+kode_barang).value;

                if(satuan_brg == "KG"){
                    var subtotal = qty * harga;
                }else if(satuan_brg == "ROLL"){
                    var subtotal = qty * 25 * harga;
                }else if(satuan_brg == "LOT"){
                    var subtotal = qty * (12 * 25) * harga;
                }else{
                    var subtotal = qty * harga;
                }

                if (!isNaN(subtotal)) {
                    $("#hiddensubtotal_retail-"+index_id).val(subtotal);
                    $("#subtotalretail-"+index_id).val(subtotal);
                    hitungTotalRetail();
                }
            }

            function hitungDpStok(){
                var total = document.getElementById('total_stok').value;
                var dp      = document.getElementById('dp_stok').value;

                var result = parseInt(total) - parseInt(dp);
                if (!isNaN(result)) {
                    $("#grand_tot_stok").val(result);
                    document.getElementById('grand_tot_sstok').innerHTML = result;
                }
            }

        </script>
    </x-app-layout>
