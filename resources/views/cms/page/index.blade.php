<x-app-layout>
    <div class="rz-panel">
        <div id="panelHeader">
            <h3>Pengaturan
                <span class="rz-panel-header-arrow">
                    &rsaquo;
                </span>
                <span class="rz-panel-header-action">
                    Pengguna
                </span>
            </h3>
        </div>
        <div id="panelBody">
            <div class="uk-flex uk-flex-between">
                <h4>List Halaman Web</h4>
                <a href="{{ route('page.create') }}" class="uk-button uk-button-default uk-border-rounded">
                    Add Page
                </a>
            </div>

            <div class="uk-margin-large">
                <div class="uk-margin">
                    <x-alert />
                </div>

                <table class="uk-table uk-table-small uk-table-striped" id="table-page" style="width: 100%">
                    <thead>
                        <tr>
                            <th class="uk-table-shrink">No</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pages as $page)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="uk-table-expand">{{ $page->title }}</td>
                                <td class="uk-table-shrink">{{ $page->status }}</td>
                                <td class="uk-width-auto uk-float-right">
                                    <ul class="uk-iconnav">
                                        <li><a href="#" title="View" uk-icon="icon: eye"></a></li>
                                        <li><a href="{{ route('page.edit', $page->id) }}" title="Edit"
                                                uk-icon="icon: file-edit"></a></li>
                                        <li><a onclick="confirmDel(this)" data-id="{{ $page->id }}" title="Delete"
                                                uk-icon="icon: trash"></a></li>
                                    </ul>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


        </div>



        <form action="" method="POST" id="form-delete">
            @method('DELETE')
            @csrf
        </form>

    </div>
    @push('css')
        <link rel="stylesheet" href="{{ asset('plugins/datatable/datatable.uikit.min.css') }}">
    @endpush
    @push('js')
        <script src="{{ asset('plugins/datatable/dataTables.min.js') }}"></script>
        <script src="{{ asset('plugins/datatable/datatable.uikit.min.js') }}"></script>
    @endpush
    @push('script')
        <script>
            $(function() {
                var table = $('#table-page').DataTable({
                    "dom": '<"top"f>rt<"bottom"p><"clear">',
                    "paging": true,
                    "ordering": false,
                    "info": false,
                    "lengthChange": false,
                    "orderClasses": false,
                    "scrollX": true
                });
            });

            function confirmDel(ele) {
                var id_del = $(ele).data("id");
                var actionDel = "{{ url('/cms/page') }}/" + id_del;
                UIkit.modal.confirm('<h5>Delete Confirmation</h5><p>Are you sure ? the selected data will be removed.</p>')
                    .then(function() {
                        $('#form-delete').attr("action", actionDel);
                        $('#form-delete').trigger("submit");
                    }, function() {
                        console.log('Rejected.')
                    });

            }
        </script>
    @endpush
</x-app-layout>
