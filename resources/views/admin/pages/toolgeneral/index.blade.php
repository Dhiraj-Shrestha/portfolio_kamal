@extends('admin.dashboard')

@section('content')
    <div class="row">

        @if (session()->has('delete'))
            <div class="alert alert-success">

                <button type="button" class="close" data-bs-dismiss="alert">X</button>
                {{ session()->get('delete') }}

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
                        <h3 class="page-title">General Tool</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">General Tool</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="{{ route('toolbox.general.create') }}" class="btn add-btn"><i
                                class="fa fa-plus"></i> Add
                            Tool </a>

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
                                        <th>Tool Image</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @isset($datas)

                                        @foreach ($datas as $data)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $data->title }}</td>
                                                <td><img src="/ToolGeneral/{{ $data->image }}" alt=""
                                                        style="border-radius: 0px !important; width:150px !important; height:150px; object-fit:contain;">
                                                </td>
                                                <td class="text-center">
                                                    <button class="btn btn-success pt-2 pb-2 "><a
                                                            href="{{ route('toolbox.general.edit', $data->id) }}"
                                                            class=" text-white text-decoration-none
                                                            ">Edit</a></button>
                                                    <button class="btn btn-danger pt-2 pb-2"><a
                                                            href="{{ route('toolbox.general.delete', $data->id) }}"
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
