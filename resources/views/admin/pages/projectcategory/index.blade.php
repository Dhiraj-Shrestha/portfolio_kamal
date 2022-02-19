@extends('admin.dashboard')

@section('content')
    <div class="row">

        @if (session()->has('delete'))
            <div class="alert alert-success">

                <button type="button" class="close" data-bs-dismiss="alert">X</button>
                {{ session()->get('delete') }}

            </div>

        @endif
        @if (session()->has('error'))
            <div class="alert alert-danger">

                <button type="button" class="close" data-bs-dismiss="alert">X</button>
                {{ session()->get('error') }}

            </div>

        @endif
        @if (session()->has('message'))
            <div class="alert alert-success">

                <button type="button" class="close" data-bs-dismiss="alert">X</button>
                {{ session()->get('message') }}

            </div>

        @endif

        <!-- Page Header -->
        <div class="page-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Project Category</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Project Category</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="{{ route('project.category.create') }}" class="btn add-btn"><i
                                class="fa fa-plus"></i> Add
                            Category</a>

                    </div>
                </div>
            </div>
        </div>

        <!-- /Page Header -->
        <div class="row">
            <div class="col-md-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">Main banner</p>
                        <div class="table-responsive">
                            <table id="recent-purchases-listing" class="table">
                                <thead>
                                    <tr>
                                        <th>S.N</th>
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @isset($datas)

                                        @foreach ($datas as $data)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$data->title}}</td>
                                                {{-- @if($data->status == 1)
                                                    <td>Active</td>
                                                @else
                                                <td>Deactive</td>
                                                @endif --}}
                                                <td>{{$data->status ? 'Active' : 'Deactive' }}</td>
                                                <td class="text-center">
                                                    <button class="btn btn-success pt-2 pb-2 ">
                                                        <a href="{{ route('project.category.edit', $data->id) }}"
                                                            class=" text-white text-decoration-none
                                                            ">Edit</a></button>
                                                    <button class="btn btn-danger pt-2 pb-2">
                                                        <a href="{{ route('project.category.delete', $data->id) }}"
                                                            class="text-white text-decoration-none">Delete</a></button>
                                                </td>
                                            </tr>

                                        @endforeach
                                    @endisset
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
