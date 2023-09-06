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
                            <h5>Download Semua Master Data Tipe Kain</h5>
                            <div>

                                <div class="uk-margin-medium-top ">
                                    <div class="uk-card uk-card-default uk-card-body uk-width-3-4@m uk-align-center">
                                        <h1 class="uk-card-title uk-text-center">Unduh Semua Data</h1>
                                        <p class="uk-text-center">Anda dapat mengunduh semua data master tipe kain dan master-master lainnya dalam format Excel.</p>
                                        <div class="uk-text-center">
                                            <a href="{{ route('tipe.export.all') }}" class="uk-button uk-button-primary">Unduh Data</a>
                                        </div>
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
