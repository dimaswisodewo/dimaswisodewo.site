@extends('layouts.admin.index')

@section('title', 'Admin - Roles')

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css') }}">
@endpush

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Roles</h1>
            <a href="{{ route('role.create')}} " class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fa fa-plus fa-sm text-white-50 mr-1"></i> New Item</a>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="card-body" style="overflow: auto;">
                <div class="table-responsive">
                    <table id="table-admin" class="table table-bordered" cellspacing="0" width='100%'>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Work ID</th>
                                <th>Title</th>
                                <th>Development Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->work_id}}</td>
                                    <td>{{$item->works['title']}}</td>
                                    <td>{{$item->role}}</td>
                                    <td>
                                        <a href="{{ route('role.edit', $item->id) }}">
                                            <button class="btn btn-primary m-1">
                                                <i class="fa fa-pencil-alt"></i>
                                            </button>
                                        </a>
                                        <form action="{{ route('role.destroy', $item->id) }} " method="POST" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger m-1">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center" colspan="5">Data Kosong</td>
                                </tr>
                            @endforelse
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    
@endsection

@push('addon-script')
    <script src="{{ url('https://code.jquery.com/jquery-3.5.1.js') }}"></script>
    <script src="{{ url('https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('#table-admin').DataTable();
        });
    </script>
@endpush