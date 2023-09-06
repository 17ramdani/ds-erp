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
                            <h5>Aksesoris Tipe Kain</h5>
                            <div>
                                <div class="uk-margin-small-top">
                                    <div class="uk-alert">
                                        <h5>Catatan</h5>
                                         <p> Isi Id dengan id aksesoris berdasarkan sheet aksesoris pada format download</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-2@s">
                        <div class="rz-panel">
                            <x-alert />
                            <h5>Download dan Upload Aksesoris Tipe Kain</h5>
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
                                            <p>Download format upload. <a href="{{ route ('tipe-acs.export') }}">DOWNLOAD</a></p>
                                        </div>
                                    </div>
                                    <div class="uk-margin uk-text-right">
                                        <form action="{{ route('tipe-acs.import') }}" method="POST" enctype="multipart/form-data">
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
