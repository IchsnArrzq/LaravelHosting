@extends('layouts.app')
@section('title', 'User Backup List')
@push('bread')
<li class="breadcrumb-item active">Backup</li>
@endpush
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex flex-row justify-content-between">
                <a href="{{ url()->previous() }}" class="btn btn-sm btn-info">Back</a>
                <div class="btn-group">
                    <a href="{{ route('admin.user_backup.edit', 'all') }}" class="btn btn-sm btn-primary">Restore All</a>
                    <form action="{{ route('admin.user_backup.destroy', 'all') }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-sm btn-danger delete_confirm" type="submit">Destroy All</button>
                    </form>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="datatable">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user_backups as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->email }}</td>
                                <td><span class="badge badge-warning">secrect</span></td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('admin.user_backup.edit', $data->id) }}" class="btn btn-sm btn-info">Restore</a>
                                        <form action="{{ route('admin.user_backup.destroy', $data->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-sm btn-warning delete_confirm" type="submit">Destroy</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@push('admin.script')
<script>
    $('#datatable').DataTable()
    $('.delete_confirm').click(function(event) {
        let form = $(this).closest("form");
        event.preventDefault();
        swal({
                title: `Are you sure you want to delete this record?`,
                text: "If you delete this, it will be gone forever.",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
    });
</script>
@endpush