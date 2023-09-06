<x-app-layout>
    <div class="rz-panel">
        <div id="panelHeader">
            <h3>Website
                <span class="rz-panel-header-arrow">
                    &rsaquo;
                </span>
                <span class="rz-panel-header-action">
                    Halaman Web
                </span>
            </h3>
        </div>
        <div id="panelBody">
            <div class="uk-flex uk-flex-between">
                <h4>Tambah Halaman</h4>
            </div>

            <div class="uk-margin-large">
                <div class="uk-margin">
                    <x-alert />
                </div>
                <form class="uk-form-stacked" method="POST" action="{{ route('page.store') }}">
                    @csrf
                    <div class="uk-margin">
                        <label class="uk-form-label">Title
                            <x-required />
                        </label>
                        <div class="uk-form-controls">
                            <input class="uk-input" name="title" id="title" required type="text"
                                placeholder="Some text...">
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label">Content
                            <x-required />
                        </label>
                        <textarea rows="10" class="uk-textarea content" name="content" id="content" placeholder="Some text..."></textarea>
                    </div>

                    <div class="uk-margin">
                        <label class="uk-form-label">Meta Title</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" name="meta_title" id="meta_title" type="text"
                                placeholder="Some text...">
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label class="uk-form-label">Meta Description</label>
                        <textarea rows="5" class="uk-textarea" name="meta_description" id="meta_description" placeholder="Some text..."></textarea>
                    </div>

                    <div class="uk-margin-large-top uk-text-right">
                        <button type="submit" name="draft" value="draft"
                            class="uk-button uk-button-default uk-border-rounded">Save Draft</button>
                        <button type="submit" name="publish" value="publish"
                            class="uk-button uk-button-primary uk-border-rounded">Publish</button>
                    </div>
                </form>


            </div>

        </div>

    </div>
    @push('js')
        <script src="{{ asset('packages/tinymce/js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
        <script>
            tinymce.init({
                selector: 'textarea#content', // Replace this CSS selector to match the placeholder element for TinyMCE
                plugins: 'code table lists image media importcss',
                toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | table | image | media| iframe | code',
                iframe_template_callback: (data) =>
                    `<iframe title="${data.title}" width="${data.width}" height="${data.height}" src="${data.source}"></iframe>`,
                file_picker_callback: elFinderBrowser,
                promotion: false,
                // menubar: false,
                content_css: ["/plugins/uikit/css/uikit.css", "/assets/css/admin/style-202306.css"],
                // importcss_file_filter: "/plugins/uikit/css/uikit.css"
            });

            function elFinderBrowser(callback, value, meta) {
                tinymce.activeEditor.windowManager.openUrl({
                    title: 'File Manager',
                    url: "{{ route('elfinder.tinymce5') }}",
                    /**
                     * On message will be triggered by the child window
                     *
                     * @param dialogApi
                     * @param details
                     * @see https://www.tiny.cloud/docs/ui-components/urldialog/#configurationoptions
                     */
                    onMessage: function(dialogApi, details) {
                        if (details.mceAction === 'fileSelected') {
                            const file = details.data.file;

                            // Make file info
                            const info = file.name;

                            // Provide file and text for the link dialog
                            if (meta.filetype === 'file') {
                                callback(file.url, {
                                    text: info,
                                    title: info
                                });
                            }

                            // Provide image and alt text for the image dialog
                            if (meta.filetype === 'image') {
                                callback(file.url, {
                                    alt: info
                                });
                            }

                            // Provide alternative source and posted for the media dialog
                            if (meta.filetype === 'media') {
                                callback(file.url);
                            }

                            dialogApi.close();
                        }
                    }
                });
            }
        </script>
    @endpush
</x-app-layout>
