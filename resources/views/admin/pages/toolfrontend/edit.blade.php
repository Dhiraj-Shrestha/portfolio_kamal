@extends('admin.dashboard')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">

                <div class="card-body">
                    <h4 class="card-title">Edit Front-end Tool</h4>

                    <form class="forms-sample" action="{{ route('toolbox.frontend.update', $data->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control file-upload-info"
                                placeholder="Enter your title" required value="{{ $data->title }}">
                        </div>
                        <div class="form-group">
                            <label>Old Image</label>
                            <img src="/ToolFrontend/{{ $data->image }}" alt=""
                                style="border-radius: 0px !important; width:150px !important; height:150px; object-fit:contain;">
                        </div>
                        <div class="form-group">
                            <label>New Image</label>
                            <input type="file" name="file" class="form-control file-upload-info" required>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                    </form>
                </div>

            </div>
        </div>

    </div>
@endsection
