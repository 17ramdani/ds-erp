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
                            <x-alert />

                            <h5>Tambah Bagian</h5>
                            <form class="uk-form-stacked" action="{{ route('bagian.store') }}" method="POST">
                                @csrf

                                <div class="uk-margin">
                                    <label class="uk-form-label">Nama</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" type="text" name="nama" required >
                                    </div>
                                </div>

                                <div class="uk-margin">
                                    <label class="uk-form-label">Keterangan</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" type="text" name="keterangan" required>
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
