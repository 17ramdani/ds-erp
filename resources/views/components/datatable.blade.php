@push('css')
    <link rel="stylesheet" href="{{ asset('plugins/datatable/datatable.uikit.min.css') }}">
@endpush
@push('js')
    <script src="{{ asset('plugins/datatable/dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatable/datatable.uikit.min.js') }}"></script>
@endpush
@push('script')
    <script>
        $(document).ready(function() {
            var dt = $('#table-so').DataTable({
                ordering: false,
                info: false,
                lengthChange: false,
                dom: '<"top">rt<"bottom"p><"clear">',
            });

            $('#button-cari').on('keyup click', function() {
                dt.search($('#cari').val()).draw();
            });
        });
    </script>
@endpush
