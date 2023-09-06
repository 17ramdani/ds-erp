<x-app-layout>

    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Ekspedisi</h3>
                </div>

                <div class="">
                    <x-alert />
                    <div class="rz-panel">

                        <h4>Update Status Kirim</h4>

                        <div uk-grid>
                            <div class="uk-width-2-3@s">
                                <form class="uk-form-stacked" method="POST"
                                    action="{{ route('ekspedisi.update', $data->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="uk-margin">
                                        <label class="uk-form-label">No. SO</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" name="nomor" value="{{ $data->pesanan->nomor }}"
                                                type="text" disabled>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label">Customer</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" name="customer"
                                                value="{{ $data->pesanan->customer->nama }}" type="text"
                                                placeholder="Asep" disabled>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label">Alamat Pengiriman</label>
                                        <div class="uk-form-controls">
                                            <textarea rows="2" class="uk-textarea" name="alamat_kirim" placeholder="Jl. Terusan Pasirkoja No. 250 Bandung"
                                                disabled>{{ $data->pesanan->alamat_kirim }}</textarea>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label">Armada
                                            <x-label-req />
                                        </label>
                                        <div class="uk-form-controls">
                                            <select name="select_armada" id="select_armada" class="uk-select" required>
                                                <option value="">-Pilih-</option>
                                                <option value="Internal" @selected($data->armada == 'Internal')>Internal</option>
                                                <option value="Lainya" @selected($data->armada != 'Internal')>Lainya</option>
                                            </select>
                                        </div>
                                        <div class="uk-form-controls uk-margin" id="input-armada"
                                            {{ $data->armada != 'Internal' ? '' : 'hidden' }}>
                                            <input type="text" name="armada" id="armada" class="uk-input"
                                                value="{{ $data->armada }}" required placeholder="Armada lainya">
                                        </div>
                                    </div>

                                    <div class="uk-margin">
                                        <label class="uk-form-label">Status
                                            <x-label-req />
                                        </label>
                                        <div class="uk-form-controls">
                                            <select class="uk-select" name="status" required>
                                                <option @selected($data->status == 'On Delivery')>On Delivery</option>
                                                <option @selected($data->status == 'Delivered')>Delivered</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label">No. Resi/link Pengiriman
                                            <x-label-req />
                                        </label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" type="text" value="{{ $data->no_resi }}"
                                                name="no_resi" id="no_resi">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label">Upload Resi</label>
                                        <div class="js-upload" uk-form-custom>
                                            <input type="file" name="file" id="file"
                                                onchange="getFileData(this)" accept=".jpg,.jpeg,.png,.pdf">
                                            <button class="uk-button uk-button-default" type="button"
                                                tabindex="-1">Pilih File</button>
                                        </div>
                                        <div class="uk-margin-small">
                                            <span id="filename">
                                                @if (isset($data->file_resi))
                                                    <a href="{{ $data->file_resi }}" target="_blank"
                                                        rel="noopener noreferrer">View File</a>
                                                @endif
                                            </span>
                                        </div>
                                    </div>
                                    <div class="uk-margin-large-top uk-text-right">
                                        <button type="reset" class="uk-button uk-button-default">Cancel</button>
                                        <button type="submit" class="uk-button uk-button-primary">Submit</button>
                                    </div>


                                </form>
                            </div>
                        </div>



                    </div>
                </div>

            </div>




        </div>
    </main>
    @push('script')
        <script>
            var no_sj = "{{ $data->no_sj }}";
            $('#select_armada').on('change', function() {
                let selectArmda = $(this).val();
                if (selectArmda == "Lainya") {
                    $('#input-armada').prop('hidden', false);
                    $('#armada').val("");
                    $('#no_resi').val("");
                } else {
                    $('#input-armada').prop('hidden', true);
                    $('#no_resi').val(no_sj);
                    $('#armada').val("Internal");
                }
            });

            function getFileData(myFile) {
                var file = myFile.files[0];
                var filename = file.name;
                $('#filename').text(filename);
            }
        </script>
    @endpush
</x-app-layout>
