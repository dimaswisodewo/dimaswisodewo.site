@extends('layouts.admin.index')

@section('title', 'Admin - Edit Work Detail')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Item - {{ $item->works->title }}</h1>
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
                <form action="{{ route('work-detail.update', $item->id) }}" method="POST"> {{--  action store untuk menyimpan data  --}}
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
                        <label for="description">Short Description</label>
                        <textarea  type="text" class="form-control" name="description" placeholder="Description">{{ $item->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="lessons_learned">Lessons Learned</label>
                        <textarea  type="text" class="form-control" name="lessons_learned" placeholder="Lessons Learned">{{ $item->lessons_learned }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="source_code">Source Code Link</label>
                        <textarea  type="text" class="form-control" name="source_code" placeholder="Source Code Link">{{ $item->source_code }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="downloadable_file">Downloadable File Link</label>
                        <textarea name="downloadable_file" class="form-control" type="text" placeholder="Downloadable File Link">{{ $item->downloadable_file }}</textarea>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
@endsection