<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Customer Experience</h3>
                </div>

                <div class="uk-grid-medium" uk-grid>
                    <div class="uk-width-2-3@s">
                        <div class="rz-panel">

                            <h5>Follow Up Keluhan</h5>
                            <form class="uk-form-horizontal" action="/ticketing-add" method="POST">
                                @csrf
                                <div class="uk-margin">
                                    <label class="uk-form-label">Customer</label>
                                    <div class="uk-form-controls">
                                        {{ $dtict->nama_customer->nama }}
                                        <input type="hidden" name="nama" value="{{ $dtict->nama_customer->nama }}">
                                        <input type="hidden" name="customer_id"
                                            value="{{ $dtict->nama_customer->id }}">
                                        <input type="hidden" name="keluhan_id" value="{{ $dtict->id }}">
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label">No. Pesanan</label>
                                    <div class="uk-form-controls">
                                        {{ $dtict->no_pesanan }}
                                        <input type="hidden" name="no_pesanan" value="{{ $dtict->no_pesanan }}">
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label">CS Pesanan</label>
                                    <div class="uk-form-controls">
                                        CS01
                                        <input type="hidden" name="cs" value="1">
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label">Jenis Keluhan</label>
                                    <div class="uk-form-controls">
                                        @if ($dtict->jenis_keluhan == '1')
                                            {{ 'Kualitas Pesanan' }}
                                        @elseif($dtict->jenis_keluhan == '2')
                                            {{ 'Kuantitas Pesanan' }}
                                        @elseif($dtict->jenis_keluhan == '3')
                                            {{ 'Lainnya' }}
                                        @else
                                            {{ 'N/A' }}
                                        @endif
                                        <input type="hidden" name="jkeluhan" value="{{ $dtict->jenis_keluhan }}">
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label">Deskripsi Keluhan</label>
                                    <div class="uk-form-controls">
                                        {{ $dtict->desc_keluhan }}
                                        <input type="hidden" name="desc_keluhan" value="{{ $dtict->desc_keluhan }}">
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label">Tindak Lanjut</label>
                                    <div class="uk-form-controls">
                                        {{-- <textarea rows="5" name="tindak_lanjut" class="uk-textarea">{{ $dtict->tindakl[0]->tindak_lanjut }}</textarea> --}}
                                        <textarea rows="5" name="tindak_lanjut" class="uk-textarea"></textarea>
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label">Tgl. Tindak Lanjut</label>
                                    <div class="uk-form-controls">
                                        {{-- <input type="date"
                                            value="{{ old('tg_tindak_lanjut', $dtict->tindakl[0]->tanggal_tindak_lanjut) }}"class="uk-input"
                                            name="tg_tindak_lanjut"> --}}
                                        <input type="date" class="uk-input" name="tg_tindak_lanjut">
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label">Status Keluhan</label>
                                    <div class="uk-form-controls">
                                        <select class="uk-select" name="status">
                                            <option value="1">Open
                                            </option>
                                            <option value="2" {{ $dtict->status == '2' ? 'selected' : '' }}>On
                                                Process</option>
                                            <option value="4" {{ $dtict->status == '3' ? 'selected' : '' }}>Closed
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="uk-margin-large-top"><button type="submit"
                                        class="uk-button uk-button-primary uk-border-rounded">Submit</button></div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
</x-app-layout>
