@extends('layouts.admin.index')

@section('title', 'Admin - Edit Video')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Item Video - {{ $item->works->title }}</h1>
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
                <form action="{{ route('video.update', $item->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="work_id">Title</label>
                        <select name="work_id" class="form-control">
                            <option value="{{ $item->work_id}} ">{{ $item->works->title }} (Current Value)</option>
                            @foreach ($works as $work)
                                <option value="{{ $work->id }}">{{ $work->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="video">Image</label>
                        <input type="text" class="form-control" name="video" placeholder="Link Video" value="{{ $item->video }}">
                    </div>
                    <button class="btn btn-primary btn-block" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
@endsection