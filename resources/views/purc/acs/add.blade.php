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

                            <h5>Tambah Aksesoris</h5>
                            <form class="uk-form-stacked" action="{{ route('acs.store') }}" method="POST">
                                @csrf

                                <div class="uk-margin">
                                    <label class="uk-form-label">Nama Aksesoris</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" type="text" name="name" >
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label">Tipe</label>
                                    <div class="uk-form-controls">
                                        <select class="uk-select" name="type" required>
                                            <option>-- Pilih Tipe Aksesoris --</option>
                                            <option value="BASIC">BASIC</option>
                                            <option value="SPANDEX">SPANDEX</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label">Harga Ecer</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" type="number" name="harga_ecer" required>
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label">Harga Roll</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" type="number" name="harga_roll" required>
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label">Maksimal</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" type="number" name="maks" required>
                                    </div>
                                </div>
                                <div class="uk-margin-large-top">
                                    <button type="submit" class="uk-button uk-button-primary uk-border-rounded">Simpan</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
</x-app-layout>
