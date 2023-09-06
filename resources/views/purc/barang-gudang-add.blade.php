<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Purchasing</h3>
                </div>

                <div class="uk-grid-medium" uk-grid>
                    <div class="uk-width-2-3@s">
                        <div class="rz-panel">

                            <h5>Tambah Jenis Gudang</h5>
                            <form class="uk-form-stacked">

                                <div class="uk-margin">
                                    <label class="uk-form-label">Kode Gudang</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" type="text">
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label">Jenis Gudang</label>
                                    <div class="uk-form-controls">
                                        <select class="uk-select">
                                            <option>Layak</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label">Order Report</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" type="text">
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label">Baris 2 (Print Layout)</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" type="text">
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label">Baris 3 (Print Layout)</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" type="text">
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label">Target Omzet (Rp.)</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" type="number">
                                    </div>
                                </div>

                                <div class="uk-margin">
                                    <label class="uk-form-label">Keterangan</label>
                                    <div class="uk-form-controls">
                                        <textarea rows="5" class="uk-textarea"></textarea>
                                    </div>
                                </div>
                            </form>
                            <div class="uk-margin-large-top"><a href="" class="uk-button uk-button-primary uk-border-rounded">Simpan</a></div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
</x-app-layout>
