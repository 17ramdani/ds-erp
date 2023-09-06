<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Sales &amp; Marketing</h3>
                </div>

                <div class="">

                    <div class="rz-panel">


                        <h4>Fresh Order <span uk-icon="chevron-right"></span> <span class="uk-text-light">Inquiry
                                Detail</span></h4>

                        <div class="uk-child-width-1-2@s uk-grid-large" uk-grid>
                            <div>
                                <h5>Detail Customer</h5>
                                <form class="uk-form-stacked">

                                    <div class="uk-margin">
                                        <label class="uk-form-label">Nama</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" type="text"
                                                value="{{ $order['customer']->nama }}">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label">No. HP</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" type="tel"
                                                value="{{ $order['customer']->notlp . ' / ' . $order['customer']->nohp }}">
                                        </div>
                                    </div>


                                </form>
                            </div>
                            <div>
                                <h5>Detail Kain</h5>
                                <form class="uk-form-stacked">

                                    <div class="uk-margin">
                                        <label class="uk-form-label">Jenis Kain
                                            <x-label-req />
                                        </label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" type="text" name="jenis_kain"
                                                value="{{ $order->jenis_kain }}" required>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label">Tipe Kain</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" type="text" name="tipe_kain"
                                                value="{{ $order->tipe_kain }}" required>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label">Lebar Kain</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" type="text" name="lebar"
                                                value="{{ $order->lebar }}" required>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label">Gramasi</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" type="text" name="gramasi"
                                                value="{{ $order->gramasi }}" required>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label">Warna</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" type="text" name="warna"
                                                value="{{ $order->warna }}" required>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label">Qty Body (Roll)</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" type="number" name="qty"
                                                value="{{ $order->qty }}" required>
                                        </div>
                                    </div>
                                    <div class="uk-child-width-1-3@s">
                                        @foreach ($order['accs'] as $acc)
                                            <div>
                                                <label class="uk-form-label">{{ $acc->accessories }} (kg)</label>
                                                <div class="uk-form-controls">
                                                    <input class="uk-input" type="number" name="acc[]"
                                                        value="{{ $acc->qty }}" required>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label">Keterangan</label>
                                        <div class="uk-form-controls">
                                            <textarea rows="3" class="uk-textarea" name="keterangan">{{ $order->keterangan }}</textarea>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label">Gambar</label>
                                        <img src="{{ $order->images }}" class="rz-img-thumb" alt="image">
                                    </div>
                                    <div class="uk-margin-medium-top">
                                        <a href="{{ route('fresh-order.edit', $order->id) }}"
                                            class="uk-button uk-button-primary">Create SO
                                            Fresh Order</a>
                                    </div>
                                </form>

                            </div>


                        </div>




                    </div>
                </div>

            </div>




        </div>
    </main>

</x-app-layout>
