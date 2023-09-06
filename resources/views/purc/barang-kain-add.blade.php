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

                            <h5>Tambah Jenis Kain</h5>
                            <form class="uk-form-stacked" action="{{ route('kain.store') }}" method="POST">
                                @csrf

                                <div class="uk-margin">
                                    <label class="uk-form-label">Jenis Kain</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" type="text" name="nama" required>
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label">Gambar</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" type="text" name="gambar" placeholder="https://duniasandang.com/wp-content/uploads/2022/01/combed-30s-dunia-sandang-1.jpg">
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label">Katalog</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" type="text" name="katalog" placeholder="https://drive.google.com/file/d/1QsBWt8FYbRnQKtiMi4ts_nUEpuG9aObj/view?usp=share_link">
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label">Deskripsi</label>
                                    <div class="uk-form-controls">
                                        <textarea rows="5" class="uk-textarea" name="keterangan" required></textarea>
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
