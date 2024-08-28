<x-app-layout>
    <x-slot name="header">
        <head>
            <title>Laravel 8|7 Datatables Tutorial</title>
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
            <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
            <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
        </head>
        @include('sidebar')
        @if (session('alert'))
            <div class="alert alert-success">
                {{ session('alert') }}
            </div>
        @endif
        <div class="container" >
            <div class="row justify-content-center" >
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">Language List</div>
                        <div class="card-body">
                            <div class="form-group">
                                <a type='submit' class='btn btn-xs btn-danger' href="{{ route('language.create') }}">Add Language</a>
                            </div>
                            <table class="table table-bordered table-hover data-table" id="languageTable">
                                <thead {{--class="thead-inverse"--}}>
                                <tr>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </h2>
    </x-slot>
</x-app-layout>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<script type="text/javascript">
    $(function () {
        var table = $('#languageTable').DataTable({
            responsive: true,
            processing: true,
            targets: 'no-sort',
            bSort: false,
            order: [],
            ajax: '{{ route('language.index') }}',
            columns: [
                {data: 'language_name'},
                {data: 'action'},
            ]
        });
    });

</script>
