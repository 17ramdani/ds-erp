<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Utility</h3>
                </div>

                <div class="uk-grid-medium" uk-grid>
                    <div class="uk-width-1-2@s">
                        <div class="rz-panel">
                            <x-alert />
                            <h5>Harga Tipe Kain</h5>
                            <div>
                                <div class="uk-margin-small-top">
                                    <div class="uk-alert">
                                        <h5>Catatan</h5>
                                        <p>
                                            ID KATEGORI CUSTOMER:
                                            <br>
                                            <ul>
                                                <li>
                                                    ID 1 = REGULER
                                                </li>
                                                <li>
                                                    ID 2 = DISTRIBUTOR
                                                </li>
                                                <li>
                                                    ID 3 = MEMBER
                                                </li>
                                            </ul>
                                            <p>Pastikan data dalam file Excel Anda sudah valid dan siap untuk diupload. Periksa kembali sebelum mengunggah file.</p>
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-2@s">
                        <div class="rz-panel">
                            <x-alert />
                            <h5>Download dan Upload Harga Tipe Kain</h5>
                            <div>
                                <div>
                                    <div class="uk-margin-small-top">
                                        <div class="uk-alert">
                                            <h5>Keterangan</h5>
                                            <p>Untuk mengunggah data, pastikan Anda telah mendownload template data terlebih dahulu.</p>
                                            <p>Klik tombol "DOWNLOAD" untuk mengunduh file template dalam format yang sudah sisediakan.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="uk-margin-medium-top ">
                                    <div>
                                        <div uk-alert>
                                            <h5>Notice</h5>
                                            <p>Download format upload. <a href="{{ route ('tipe-price.export') }}">DOWNLOAD</a></p>
                                        </div>
                                    </div>
                                    <div class="uk-margin uk-text-right">
                                        <form action="{{ route('tipe-price.import') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div uk-form-custom="target: true">
                                                <input type="file" aria-label="Custom controls" name="file" accept=".xlsx, .xls, .csv">
                                                <input class="uk-input uk-form-width-medium" type="text" placeholder="Select file" aria-label="Custom controls">
                                            </div>
                                            <button class="uk-button uk-button-primary uk-border-rounded">UPLOAD</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </main>
    <script>
        function previewImage(event, previewId) {
            var reader = new FileReader();
            reader.onload = function() {
                var preview = document.getElementById(previewId);
                preview.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
</x-app-layout>
