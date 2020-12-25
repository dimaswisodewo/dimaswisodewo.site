@extends('layouts.admin.index')

@section('title', 'Admin - New Work')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">New Item - Works</h1>
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
                <form action="{{ route('work.store')}}" method="POST"> {{--  action store untuk menyimpan data  --}}
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Title" value="{{old('title')}}">
                    </div>
                    <div class="form-group">
                        <label for="project_date">Project Date</label>
                        <input type="date" class="form-control" name="project_date" placeholder="Project Date" value="{{old('project_date')}}">
                    </div>
                    <div class="form-group">
                        <label for="short_description">Short Description</label>
                        <textarea  type="text" class="form-control" name="short_description" placeholder="Short Description">{{old('short_description')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="project_type">Project Type</label>
                        <select class="form-control" name="project_type">
                            <option value="">Pilih Tipe Project</option>
                            <option value="Unity">Unity</option>
                            <option value="Jupyter Notebook">Jupyter Notebook</option>
                            <option value="Website">Website</option>
                        </select>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
@endsection