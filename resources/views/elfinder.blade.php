<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>File Manager</h3>
                </div>

                <div class="">
                    <input type="hidden" id="base_url" value="{{ asset('') }}">
                    <div id="elfinder"></div>
                    <script src="{{ asset('vendor/elfinder/js/elfinder.min.js') }}"></script>
                    <script>
                        $(function () {
                            var elfinder = new ElFinder({
                                url: $('#base_url').val(),
                                lang: 'en',
                                onlyMimes: ['image/png', 'image/jpeg', 'image/gif'],
                                resizable: false,
                                commands: [
                                    'open', 'close', 'reload', 'home', 'up', 'back', 'forward',
                                    'mkdir', 'mkfile', 'upload', 'download', 'rm', 'rename', 'cut',
                                    'copy', 'paste', 'duplicate', 'link', 'unlink', 'info',
                                    'extract', 'archive', 'resize', 'rotate', 'zoom', 'sort',
                                    'filter', 'search'
                                ]
                            });
                            elfinder.elfinder('instance').bind('open', function (event, elfinder) {
                                elfinder.getUI().setTitle('ElFinder');
                            });
                        });

                    </script>

                </div>
    </main>
</x-app-layout>
