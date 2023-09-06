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
                            <form class="uk-form-stacked" action="{{ route('acs.update', ['id' => $data->id]) }}" method="POST">
                                @csrf
                                @method('PUT')


                                <div class="uk-margin">
                                    <label class="uk-form-label">Nama Aksesoris</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" type="text" name="name" value="{{ $data->name }}"required>
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label">Tipe Aksesoris</label>
                                    <div class="uk-form-controls">
                                        <select class="uk-select" name="type" required>
                                            <option>{{ $data->type }}</option>
                                            <option value="BASIC">BASIC</option>
                                            <option value="SPANDEX">SPANDEX</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label">Harga Roll</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" type="text" name="harga_roll" value="{{ $data->harga_roll }}"required>
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label">Harga Ecer</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" type="text" name="harga_ecer" value="{{ $data->harga_ecer }}"required>
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label">Maksimal</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" type="text" name="maks" value="{{ $data->maks }}">
                                    </div>
                                </div>

                                <div class="uk-margin-large-top">
                                    <button type="submit" class="uk-button uk-button-primary uk-border-rounded text-right">Submit</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
</x-app-layout>
