@extends('admin.dashboard')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">

                <div class="card-body">
                    <h4 class="card-title">Add Front-end Tool</h4>

                    <form class="forms-sample" action="{{ route('toolbox.frontend.upload') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control file-upload-info"
                                placeholder="Enter your title" required>
                        </div>
                        <div class="form-group">
                            <label>File upload</label>
                            <input type="file" name="file" class="form-control file-upload-info" required>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                    </form>
                </div>

            </div>
        </div>

    </div>
@endsection
