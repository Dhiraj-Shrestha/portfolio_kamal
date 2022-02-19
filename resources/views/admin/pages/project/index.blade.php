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
                        <h3 class="page-title">Front-end Tool</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Front-end Tool</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="{{ route('myproject.create') }}" class="btn add-btn"><i
                                class="fa fa-plus"></i> Add
                            Project </a>

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
                                        <th>Project Image</th>
                                        <th>Project Description</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @isset($datas)

                                        @foreach ($datas as $data)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $data->project_title }}</td>
                                                <td><img src="{{asset('projectImage/'.  $data->project_image) }}" alt=""
                                                        style="border-radius: 0px !important; width:150px !important; height:150px; object-fit:contain;">
                                                </td>
                                                <td>{{ $data->project_description }}</td>
                                                <td class="text-center">
                                                    <button class="btn btn-success pt-2 pb-2 "><a
                                                            href="{{ route('toolbox.frontend.edit', $data->id) }}"
                                                            class=" text-white text-decoration-none
                                                            ">Edit</a></button>
                                                    <button class="btn btn-danger pt-2 pb-2"><a
                                                            href="{{ route('toolbox.frontend.delete', $data->id) }}"
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

{{-- <div class="tab-content" id="pills-tabContent{{$projectCategory->id }}">
                    
                 

    <div class="tab-pane fade @if($loop->first) show active @endif" id="pills-home" role="tabpanel"
    aria-labelledby="pills-home-tab{{$projectCategory->id }}">
    <div class="row g-4 mt-3 d-flex align-items-center justify-content-center">
        @foreach ($projectCategory->projects as $project)
        <div class="col-md-5 mb-3">
            <div class="project">
                <div class="project-box">
                    <img src="{{ asset('projectImage/'. $project->project_image) }}" alt="" width="100%"
                        height="100%">

                    <div class="project-box-content">

                        <h5 class="title">{{ $project->project_title }}</h5>
                        <p class="description">{{ $project->project_description }}</p>

                        <a href="{{ route('use.case.study',$project->id) }}" class="useCase">Use case study</a>
                        <div
                            class="projec-box-content-bottom d-flex justify-content-between align-items-end">

                            <div class="project-category">

                                <span>
                                    {{ $project->project_tag }}
                                </span>
                            </div>
                            <div class="project-btns d-flex flex-column">
                                <a class="btn-first" href="{{ $project->appstore_link }}">View app store</a>
                                <a class="btn-first mt-2 btn-blue"
                                    href="{{ $project->playstore_link }}">View Play store</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
       
    </div>
</div>  --}}