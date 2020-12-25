@extends('layouts.admin.index')

@section('title', 'Admin - New Work Detail')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">New Item - Work Details</h1>
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
                <form action="{{ route('work-detail.store')}}" method="POST"> {{--  action store untuk menyimpan data  --}}
                    @csrf
                    <div class="form-group">
                        <label for="work_id">Title</label>
                        <select name="work_id" class="form-control">
                            <option value="">Pilih Project</option>
                            @foreach ($items as $item)
                                <option value="{{ $item->id }}">{{ $item->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea  type="text" class="form-control" name="description" placeholder="Description">{{old('description')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="lessons_learned">Lessons Learned</label>
                        <textarea  type="text" class="form-control" name="lessons_learned" placeholder="Lessons Learned">{{old('lessons_learned')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="source_code">Source Code Link</label>
                        <textarea  type="text" class="form-control" name="source_code" placeholder="Source Code Link">{{old('source_code')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="downloadable_file">Downloadable File Link</label>
                        <textarea name="downloadable_file" class="form-control" type="text" placeholder="Downloadable File Link">{{ old('downloadable_file') }}</textarea>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
@endsection