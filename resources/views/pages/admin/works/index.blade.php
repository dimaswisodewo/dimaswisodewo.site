@extends('layouts.admin.index')

@section('title', 'Admin - Works')

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css') }}">
@endpush

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Works</h1>
            <a href="{{ route('work.create')}} " class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
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
                                <th>Title</th>
                                <th style="width: 300px;">Slug</th>
                                <th>Project Date</th>
                                <th>Short Description</th>
                                <th>Project Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->slug}}</td>
                                    <td>{{$item->project_date}}</td>
                                    <td>{{$item->short_description}}</td>
                                    <td>{{$item->project_type}}</td>
                                    <td>
                                        <a href="{{ route('work.show', $item->id) }}" class="btn-action">
                                            <button class="btn btn-primary m-1">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </a>
                                        <a href="{{ route('work.edit', $item->id) }}">
                                            <button class="btn btn-primary m-1">
                                                <i class="fa fa-pencil-alt"></i>
                                            </button>
                                        </a>
                                        <form action="{{ route('work.destroy', $item->id) }} " method="POST" class="d-inline">
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
                                    <td class="text-center" colspan="7">Data Kosong</td>
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