@extends('layouts.admin.index')

@section('title', 'Admin - Edit Work')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Work - {{ $item->title}}</h1>
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
                <form action="{{ route('work.update', $item->id) }}" method="POST"> {{--  action store untuk menyimpan data  --}}
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input  type="text" class="form-control" name="title" placeholder="Title" value="{{ $item->title }}">
                    </div>
                    <div class="form-group">
                        <label for="project_date">Project Date</label>
                        <input  type="date" class="form-control" name="project_date" placeholder="Project Date" value="{{ $item->project_date }}">
                    </div>
                    <div class="form-group">
                        <label for="short_description">Short Description</label>
                        <textarea  type="text" class="form-control" name="short_description" placeholder="Short Description">{{ $item->short_description }}</textarea>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
@endsection