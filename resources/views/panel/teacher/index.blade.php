@extends('panel.app.blade.php');
@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered" id="UsersTable_id">
                <thead>
                <tr>
                    <th>#</th>
                    <th>İsim</th>
                    <th>soyisim</th>
                    <th>okul no</th>
                    <th>Email</th>
                    <th>Detay</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>#</th>
                    <th>İsim</th>
                    <th>soyisim</th>
                    <th>okul no</th>
                    <th>Email</th>
                    <th>Detay</th>
                </tr>
                </tfoot>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                }
            });
        });
        $(document).ready(function() {
            $('#UsersTable_id').DataTable();
        });


        var dataTable = null;

        var dataTable = $('#UsersTable_id').DataTable({
            language: {
                url: '//cdn.datatables.net/plug-ins/1.10.21/i18n/Turkish.json'
            },
            ajax: {
                url: '{{ route("teacher.fetch") }}',
                type: 'GET', // Veri çekme methodu GET olarak değiştirildi
            },
            order: [
                [0, 'ASC']
            ],
            processing: true,
            serverSide: true, // Server-side işleme izin verildi
            scrollX: true,
            scrollY: true,
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'name'},
                {data: 'surname'},
                {data: 'okulno'},
                {data: 'email'},
                {data: 'detay'},
            ]

        });
    </script>
@endsection
