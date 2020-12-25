@extends('layouts.admin.index')

@section('title', 'Admin - New Work Role')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Item Role - {{ $item->works->title }}</h1>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('role.update', $item->id) }}" method="POST"> {{--  action store untuk menyimpan data  --}}
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="work_id">Title</label>
                        <select name="work_id" class="form-control">
                            <option value="{{ $item->work_id}} ">{{ $item->works->title }} (Current Value)</option>
                            @foreach ($work as $wor)
                                <option value="{{ $wor->id }}">{{ $wor->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="role">Development Role</label>
                        <input type="text" class="form-control" name="role" placeholder="Role" value="{{ $item->role }}">
                    </div>
                    <button class="btn btn-primary btn-block" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
@endsection