@extends('layouts.app')
@section('title', 'Kategori Cuti Create')
@push('bread')
<li class="breadcrumb-item"><a href="{{ route('admin.kategori_cuti.index') }}">Kategori Cuti</a></li>
<li class="breadcrumb-item active">Create</li>
@endpush
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex flex-row justify-content-between">
                <a href="{{ route('admin.kategori_cuti.index') }} " class="btn btn-sm btn-info">Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.kategori_cuti.store') }}" method="post" id="form">
                    @csrf
                    @include('admin.kategori_cuti.form')
                </form>
            </div>
            <div class="card-footer d-flex flex-row justify-content-end">
                <button class="btn btn-sm btn-success" id="store">Store</button>
            </div>
        </div>
    </div>
</div>
@stop
@push('admin.script')
<script>
    $('#store').on('click', function(){
        $('#form').submit()
    });
</script>
@endpush