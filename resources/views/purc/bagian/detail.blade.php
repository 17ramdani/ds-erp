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

                            <h5>Update Bagian</h5>
                            <form class="uk-form-stacked" action="{{ route('bagian.update', ['id' => $data->id]) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="uk-margin">
                                    <label class="uk-form-label">Kode</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" type="text" name="kode" value="{{ $data->kode }}" readonly>
                                    </div>
                                </div>


                                <div class="uk-margin">
                                    <label class="uk-form-label">Nama</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" type="text" name="nama" value="{{ $data->nama }}"required>
                                    </div>
                                </div>

                                <div class="uk-margin">
                                    <label class="uk-form-label">Keterangan</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" type="text" name="keterangan" value="{{ $data->keterangan }}"required>
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
