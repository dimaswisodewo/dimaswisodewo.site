@extends('layouts.admin.index')

@section('title', 'Admin - Works')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Work Detail {{ $item->title }} </h1>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" cellspacing="0" width='100%'>
                        {{--  @forelse ($items as $item)  --}}
                            <tr>
                                <th>ID</th>
                                <td>{{ $item->id }}</td>
                            </tr> 
                            <tr>
                                <th>Work ID</th>
                                <td>{{ $item->details['work_id'] }}</td>
                            </tr>
                            <tr>
                                <th>Work Title</th>
                                <td>{{ $item->title }}</td>
                            </tr>
                            <tr>
                                <th>Slug</th>
                                <td>{{ $item->slug }}</td>
                            </tr>
                            <tr>
                                <th>Project Date</th>
                                <td>{{ $item->project_date }}</td>
                            </tr>
                            <tr>
                                <th>Short Description</th>
                                <td>{{ $item->short_description }}</td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>{{ $item->details['description'] }}</td>
                            </tr>
                            <tr>
                                <th>Lessons Learned</th>
                                <td>{{ $item->details['lessons_learned'] }}</td>
                            </tr>
                            <tr>
                                <th>Source Code</th>
                                <td>{{ $item->details['source_code'] }}</td>
                            </tr>
                            <tr>
                                <th>Downloadable File</th>
                                <td>{{ $item->details['downloadable_file'] }}</td>
                            </tr>
                            <tr>
                                <th>Platforms</th>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                            <th style="width: 100px;">ID</th>
                                            <th>Platforms</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($item->platforms as $plat)
                                                <tr>
                                                    <td>{{ $plat['id'] }}</td>
                                                    <td>{{ $plat['platform'] }}</td>
                                                </tr>                                        
                                            @endforeach
                                        </tbody>
                                    </table>
                                </td>                            
                            </tr>
                            <tr>
                                <th>Technology</th>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                            <th style="width: 100px;">ID</th>
                                            <th>Technology</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($item->technologies as $tech)
                                                <tr>
                                                    <td>{{ $tech['id'] }}</td>
                                                    <td>{{ $tech['technology'] }}</td>
                                                </tr>                                        
                                            @endforeach
                                        </tbody>
                                    </table>
                                </td>                            
                            </tr>
                            <tr>
                                <th>Development Role</th>
                                <td>
                                    <table class="table table-bordered">
                                        <thead>
                                            <th style="width: 100px;">ID</th>
                                            <th>Development Role</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($item->roles as $rol)
                                                <tr>
                                                    <td>{{ $rol['id'] }}</td>
                                                    <td>{{ $rol['role'] }}</td>
                                                </tr>                                        
                                            @endforeach
                                        </tbody>
                                    </table>
                                </td>                            
                            </tr>
                        {{--  @empty
                        <tr>
                            <td colspan="2" class="text-center">Kosong</td>
                        </tr> 
                        @endforelse  --}}
                        
                        
                    </table>
                </div>
            </div>
        </div>

    </div>    
@endsection
