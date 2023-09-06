<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
               <div>
                   <h3>Pengaturan &amp; File</h3>
               </div>

                <div class="">

                    <div class="rz-panel">
                        <h4>File Manager</h4>
                        <div id="panelBody">

                            <div class="uk-margin-large">
                                <div id="elfinder"></div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
    @push('css')
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
    <!-- elFinder CSS (REQUIRED) -->
    <link rel="stylesheet" type="text/css" href="{{ asset($dir . '/css/elfinder.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset($dir . '/css/theme.css') }}">
@endpush

@push('js')

    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <!-- elFinder JS (REQUIRED) -->
    <script src="{{ asset($dir . '/js/elfinder.min.js') }}"></script>

    @if ($locale)
        <!-- elFinder translation (OPTIONAL) -->
        <script src="{{ asset($dir . "/js/i18n/elfinder.$locale.js") }}"></script>
    @endif
    <!-- elFinder initialization (REQUIRED) -->
    <script type="text/javascript">
        var FileBrowserDialogue = {
            init: function() {
                // Here goes your code for setting your custom things onLoad.
            },
            mySubmit: function(file) {
                window.parent.postMessage({
                    mceAction: 'fileSelected',
                    data: {
                        file: file
                    }
                }, '*');
            }
        };

        $().ready(function() {
            var elf = $('#elfinder').elfinder({
                // set your elFinder options here
                @if ($locale)
                    lang: '{{ $locale }}', // locale
                @endif
                customData: {
                    _token: '{{ csrf_token() }}'
                },
                url: '{{ route('elfinder.connector') }}', // connector URL
                soundPath: '{{ asset($dir . '/sounds') }}',
                getFileCallback: function(file) { // editor callback
                    FileBrowserDialogue.mySubmit(file); // pass selected file path to TinyMCE
                }
            }).elfinder('instance');
        });
    </script>
@endpush
</x-app-layout>
